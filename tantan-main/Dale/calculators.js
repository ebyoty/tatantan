class Calculator {
    constructor(displayElement) {
        this.display = displayElement;
        this.input = '';
        this.createButtons();
    }

    createButtons() {
        const buttonContainer = document.querySelector('.buttons');
        const buttonValues = [
            '7', '8', '9', '4',
            '5', '6', '1', '2',
            '3', '0', '+', '-',
            '/', '.', '*', 'C',
            '='
        ];

        buttonValues.forEach(value => {
            const button = document.createElement('button');
            button.textContent = value;
            button.addEventListener('click', () => this.handleButtonClick(value));
            buttonContainer.appendChild(button);
        });
    }

    handleButtonClick(value) {
        if (value === 'C') {
            this.input = '';
        } else if (value === '=') {
            try {
                const result = eval(this.input);
                this.input = result.toString();
            } catch (error) {
                this.input = 'Error';
            }
        } else {
            this.input += value;
        }
        this.display.textContent = this.input;
    }
}

const display = document.getElementById('display');
const calculator = new Calculator(display);