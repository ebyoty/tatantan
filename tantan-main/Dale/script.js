$(document).ready(function() {
    let currentInput = '';
    let operator = '';
    let resultDisplayed = false;

    $('.btn').on('click', function() {
        let value = $(this).data('value');

        if (value === '=') {
            if (currentInput !== '') {
                currentInput = eval(currentInput);
                $('#display').val(currentInput);
                resultDisplayed = true;
            }
        } else if (value === 'C') {
            currentInput = '';
            $('#display').val('');
        } else {
            if (resultDisplayed) {
                currentInput = '';
                resultDisplayed = false;
            }
            currentInput += value;
            $('#display').val(currentInput);
        }
    });
});
