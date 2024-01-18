document.addEventListener('DOMContentLoaded', function () {
    const theaterSelect = document.getElementById('theater');
    const seats = document.querySelectorAll('.seat');
    const count = document.getElementById('count');
    const total = document.getElementById('total');
    const totalAmountInput = document.getElementById('totalAmount');
    const seatPrice = 2500;
    let selectedSeats = [];
    let totalAmount = 0;

    function handleSeatSelection(seat) {
        if (!seat.classList.contains('occupied')) {
            seat.classList.toggle('selected');
            updateSelectedSeats();
        }
    }

    seats.forEach(seat => {
        seat.addEventListener('click', () => {
            handleSeatSelection(seat);
        });
    });

    theaterSelect.addEventListener('change', () => {
        // Clear selected seats and reset total amount when theater changes
        selectedSeats = [];
        totalAmount = 0;
        updateSelectedSeats();
    });

    function updateSelectedSeats() {
        const selected = document.querySelectorAll('.seat.selected');
        const selectedSeatNames = Array.from(selected).map(seat => seat.getAttribute('seat-name'));
        selectedSeats = selectedSeatNames;
        const selectedCount = selectedSeatNames.length;

        count.innerText = selectedCount;
        totalAmount = selectedCount * seatPrice;
        total.innerText = totalAmount;

        totalAmountInput.value = totalAmount;
        document.getElementById('selectedSeats').value = selectedSeatNames.join(', ');
    }

    // Function to show the cancel button
    function showCancelButton() {
        document.getElementById('cancelButton').style.display = 'block';
    }
});
