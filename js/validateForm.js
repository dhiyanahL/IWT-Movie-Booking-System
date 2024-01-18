function validateForm() {
    // Get form input values
    const cardName = document.getElementById("cardName").value;
    const cardNumber = document.getElementById("cardNumber").value;
    const expiryMonth = document.getElementById("expiryMonth").value;
    const expiryYear = document.getElementById("expiryYear").value;
    const CVV = document.getElementById("CVV").value;
    const totalAmount = document.getElementById("totalAmount").value;

    // Define regular conditions for validation
    const namePattern = /^[A-Za-z ]+$/; // Only letters and spaces allowed
    const cardNumberPattern = /^\d{4}-\d{4}-\d{4}-\d{4}$/; // 16 digits with dashes
    const monthPattern = /^(January|February|March|April|May|June|July|August|September|October|November|December)$/; // Valid months
    const yearPattern = /^\d{4}$/; // 4-digit year
    const cvvPattern = /^\d{3,4}$/; // 3 or 4 digits
    const amountPattern = /^\d+(\.\d{1,2})?$/; // Digits with optional 2 decimal places

    // Validate cardName
    if (!namePattern.test(cardName)) {
        alert("Please enter a valid name with only letters and spaces.");
        return false;
    }

    // Validate cardNumber
    if (!cardNumberPattern.test(cardNumber)) {
        alert("Please enter a valid 16-digit card number in the format: 0000-1111-2222-3333");
        return false;
    }

    // Validate expiryMonth
    if (!monthPattern.test(expiryMonth)) {
        alert("Please enter a valid month (e.g., January).");
        return false;
    }

    // Validate expiryYear
    if (!yearPattern.test(expiryYear)) {
        alert("Please enter a valid 4-digit year.");
        return false;
    }

    // Validate CVV
    if (!cvvPattern.test(CVV)) {
        alert("Please enter a valid CVV (3 or 4 digits).");
        return false;
    }

    // Validate totalAmount
    if (!amountPattern.test(totalAmount)) {
        alert("Please enter a valid total amount (digits with optional 2 decimal places).");
        return false;
    }

    return true; // Form is valid
}

