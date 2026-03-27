const $ = (q) => document.querySelector(q)
const $$ = (q) => [...document.querySelectorAll(q)]
const createSvgElement = (element, attrs = {}) => {
    const el = document.createElementNS('http://www.w3.org/2000/svg', element)
    Object.entries(attrs).forEach(([k, v]) => el.setAttribute(k, v))
    return el
}

const mapContainer = $('.map-container')
const libs = await fetch('./assets/도서관현황.json').then(res => res.json())
await fetch('./assets/southKoreaHigh.svg').then(res => res.text()).then(text => mapContainer.innerHTML = text)

const nameMap = {
    서울특별시: '서울',
    부산광역시: '부산',
    대구광역시: '대구',
    인천광역시: '인천',
    광주광역시: '광주',
    대전광역시: '대전',
    울산광역시: '울산',
    경기도: '경기',
    강원특별자치도: '강원',
    충청북도: '충북',
    충청남도: '충남',
    전라북도: '전북',
    전라남도: '전남',
    경상북도: '경북',
    경상남도: '경남',
    제주특별자치도: '제주',
    세종특별자치시: '세종',
}
const libStats = libs.reduce((acc, lib) => {
    acc[lib['시도명']] ??= { libCount: 0, seatCount: 0, bookCount: 0 }
    acc[lib['시도명']].libCount++
    acc[lib['시도명']].seatCount += +lib['열람좌석수']
    acc[lib['시도명']].bookCount += +lib['자료수(도서)']
    
    return acc
}, {})

const statKeys = ['libCount', 'seatCount', 'bookCount']
const statValues = Object.values(libStats)
let minMax = {}
statKeys.forEach(k => minMax[k] = { min: Math.min(...statValues.map(v => v[k])), max: Math.max(...statValues.map(v => v[k])) })
const percentile = (k, v) => {
    const { min, max } = minMax[k]
    return min === max ? 0 : ((v - min) / (max - min)) * 100
}

const barLabels = { libCount: '도서관 수', seatCount: '좌석 수', bookCount: '도서 수' }
const barColors = { libCount: 'blue', seatCount: 'green', bookCount: 'red' }
const posOffset = {
    경상북도: { dx: 100, dy: -30 },
    경기도: { dx: -40, dy: -20 },
    충청북도: { dx: 30, dy: 20 }
}
const tooltip = $('.tooltip')

function renderMap() {
    const svg = $('svg')
    svg.setAttribute('width', '550')
    svg.setAttribute('height', '880')
    const barMaxHeight = 30
    const barWidth = 4
    const barGap = 1
    const barGroupWidth = barWidth * 3 + barGap * 2

    $$('path[title]').forEach(path => {
        const raw = path.getAttribute('title')
        const title = nameMap[raw]
        const offset = posOffset[raw] ?? { dx: 0, dy: 0 }
        const bbox = path.getBBox()
        const cx = bbox.x + bbox.width / 2 - offset.dx
        const cy = bbox.y + bbox.height / 2 - offset.dy
        const stats = libStats[raw]
        const g = createSvgElement('g', { cursor: 'pointer' })

        statKeys.map((k, i) => {
            const pct = percentile(k, stats[k])
            const h = pct * barMaxHeight / 100
            const x = cx + i * (barWidth + barGap) - barGroupWidth / 2
            const y = cy - 10 - h

            const rect = createSvgElement('rect', {
                x: x,
                y: y,
                width: barWidth,
                height: h,
                fill: barColors[k],
                rx: 1
            })

            g.append(rect)
        })

        const text = createSvgElement('text', {
            x: cx,
            y: cy,
            'dominant-baseline': 'central',
            'text-anchor': 'middle',
            'font-size': '10px',
            fill: '#333',
            'pointer-events': 'none',
            'font-weight': 'bold'
        })
        text.textContent = title
        g.append(text)

        const tipLines = statKeys.map(k => `${barLabels[k]}: ${stats[k].toLocaleString()}`)
        const tiptext = `[${title}]\n${tipLines.join('\n')}`

        g.addEventListener('mouseenter', (e) => {
            tooltip.classList.add('visible')
            tooltip.textContent = tiptext
            tooltip.style.left = `${e.clientX + 12}px`
            tooltip.style.top = `${e.clientY + 12}px`
        })
        g.addEventListener('mousemove', (e) => {
            tooltip.style.left = `${e.clientX + 12}px`
            tooltip.style.top = `${e.clientY + 12}px`
        })
        g.addEventListener('mouseleave', () => {
            tooltip.classList.remove('visible')            
        })

        svg.append(g)
    })
}

renderMap()

const columns = [
    '시도명',
    '도서관명',
    '시군구명',
    '도서관유형',
    '휴관일',
    '평일운영시작시각',
    '평일운영종료시각',
    '열람좌석수',
    '자료수(도서)',
    '대출가능권수',
    '대출가능일수',
    '소재지도로명주소',
]

const searchInput = $('#searchInput')
const sortSelect = $('#sortSelect')
const tbody = $('tbody')

function renderTable() {
    const keyword = searchInput.value.trim()
    const sortOrder = sortSelect.value

    const sorted = [...libs].toSorted((a, b) => {
        if (sortOrder) {
            const diff = +a['자료수(도서)'] - +b['자료수(도서)']

            return sortOrder === 'asc' ? diff : -diff
        }

        return a['시도명'].localeCompare(b['시도명'])
    })

    const filtered = keyword ? sorted.filter(lib => lib['도서관명'].includes(keyword)) : sorted

    tbody.innerHTML = filtered.map(lib => {
        const cells = columns.map(col => {
            const value = lib[col]

            if (keyword && col === '도서관명') {
                return `<td>${value.replaceAll(keyword, `<mark>${keyword}</mark>`)}</td>`
            }

            return `<td>${value}</td>`
        }).join('')

        return `<tr>${cells}</tr>`
    }).join('')
}

searchInput.addEventListener('input', renderTable)
sortSelect.addEventListener('input', renderTable)

renderTable()