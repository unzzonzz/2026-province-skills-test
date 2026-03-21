let isClicked = false
let selectedSeats = []
const seatReservations = {}
reservations.forEach(r => {
    r.seats.forEach(seat => {
        if (!seatReservations[seat]) seatReservations[seat] = []
        seatReservations[seat].push(r)
    })
})

function render() {
    for (let i = 0; i < 75; i++) {
        const div = document.createElement('div')
        div.classList.add('seat')
        div.textContent = i + 1
        if (seatReservations[i + 1]) {
            div.classList.add('reserved')
            const tooltip = document.createElement('div')
            tooltip.classList.add('tooltip')
            tooltip.innerHTML = '예약 현황<br>' + seatReservations[i + 1]
                .sort((a, b) => b.reservation_date.localeCompare(a.reservation_date))
                .map(r => `${r.reservation_date} ${r.start_time} ~ ${r.end_time}`)
                .join('<br>')
            div.append(tooltip)
        }
        div.addEventListener('mousedown', () => {
            if (selectedSeats.includes(i + 1)) selectedSeats = selectedSeats.filter(seat => seat != i + 1)
            else if (selectedSeats.length < 4) selectedSeats.push(i + 1)
            handleToSelected()
        })
        div.addEventListener('mouseover', () => {
            if (!isClicked) return
            if (selectedSeats.includes(i + 1)) selectedSeats = selectedSeats.filter(seat => seat != i + 1)
            else if (selectedSeats.length < 4) selectedSeats.push(i + 1)
            handleToSelected()
        })
        seats.append(div)
    }
}

document.addEventListener('mousedown', () => {
    isClicked = true
})

document.addEventListener('mouseup', () => {
    isClicked = false
})

function handleToSelected() {
    let str = ''
    document.querySelectorAll('.seat').forEach((seat, idx) => {
        seat.classList.toggle('selected', selectedSeats.includes(idx + 1))
    })
    selectedSeats.sort((a, b) => a - b).forEach((seat, i) => {
        str += seat + (i + 1 == selectedSeats.length ? '' : ', ')
    })
    document.querySelector('.group-1 .text-1').textContent = `${selectedSeats.length}개 선택됨 ${str}`
    document.querySelector('.group-1 .group-2').classList.toggle('hidden', selectedSeats == 0)
    document.querySelector('input[name="seats"]').value = JSON.stringify(selectedSeats)
}

render()

