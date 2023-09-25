// Selectoren

let tableRow = document.getElementsByTagName('tr');
let tableCell = document.getElementsByTagName('td');
let tableSlot = document.querySelectorAll('.slot')
const playerTurn = document.querySelector('.player-turn');
const reset = document.querySelector('.reset');

for (let i = 0; i < tableCell.length; i++) {
    tableCell[i].addEventListener('click', (e) => {
        console.log(`${e.target.parentElement.rowIndex},${e.target.cellIndex}`);
    })
}

while (!player1) {
    var player1 = prompt('Speler 1: Vul je naam in. Jij bent rood.');
}

player1Color = 'red';


while (!player2) {
    var player2 = prompt('Speler 2: Vul je naam in. Jij bent geel.');
}

player2Color = 'yellow';

var currentPlayer = 1;
playerTurn.textContent = `${player1}  is aan de beurt!`;

Array.prototype.forEach.call(tableCell, (cell) => {
    cell.addEventListener('click', changeColor);
    cell.style.backgroundColor = 'white';
});


function changeColor(e) {
    let column = e.target.cellIndex;
    let row = [];

    for (let i = 5; i > -1; i--) {
        if (tableRow[i].children[column].style.backgroundColor == 'white') {
            row.push(tableRow[i].children[column]);
            if (currentPlayer === 1) {
                row[0].style.backgroundColor = player1Color;
                if (horizontalCheck() || verticalCheck() || diagonalCheck1() || diagonalcheck2() || gelijkCheck()) {
                    playerTurn.textContent = `${player1} heeft gewonnen!`;
                    playerTurn.style.color = player1Color;
                    return (alert(`${player1} heeft gewonnen!`));
                } else if (gelijkCheck()) {
                    playerTurn.textContent = 'Het is gelijkspel!';
                    return alert('Gelijkspel');
                } else {
                    playerTurn.textContent = `${player2} is aan de beurt!`;
                    return currentPlayer = 2;
                }

            } else {
                row[0].style.backgroundColor = player2Color;
                playerTurn.textContent = `${player1} is aan de beurt!`;
                if (horizontalCheck() || verticalCheck() || diagonalCheck1() || diagonalcheck2() || gelijkCheck()) {
                    playerTurn.textContent = `${player2} heeft gewonnen!`;
                    playerTurn.style.color = player2Color;
                    return (alert(`${player2} heeft gewonnen!`));
                } else if (gelijkCheck()) {
                    playerTurn.textContent = 'Het is gelijkspel!';
                    return alert('Gelijkspel');
                } else {
                    playerTurn.textContent = `${player1} is aan de beurt!`;
                    return currentPlayer = 1;
                }
            }
        }
    }

    function colorMathCheck(one, two, three, four) {
        return (one == two && one === three && one === four && one !== 'white');
    }

    function horizontalCheck() {
        for (let row = 0; row < tableRow.length; row++) {
            for (let col = 0; col < 4; col++) {
                if (colorMathCheck(tableRow[row].children[col].style.backgroundColor, tableRow[row].children[col + 1].style.backgroundColor,
                    tableRow[row].children[col + 2].style.backgroundColor, tableRow[row].children[col + 3].style.backgroundColor)) {
                    return true;
                }
            }
        }
    }

    function verticalCheck() {
        for (let col = 0; col < 7; col++) {
            for (let row = 0; row < 3; row++) {
                if (colorMathCheck(tableRow[row].children[col].style.backgroundColor, tableRow[row + 1].children[col].style.backgroundColor,
                    tableRow[row + 2].children[col].style.backgroundColor, tableRow[row + 3].children[col].style.backgroundColor)) {
                    return true;
                }
            }
        }
    }

    function diagonalCheck1() {
        for (let col = 0; col < 4; col++) {
            for (let row = 0; row < 3; row++) {
                if (colorMathCheck(tableRow[row].children[col].style.backgroundColor, tableRow[row + 1].children[col + 1].style.backgroundColor,
                    tableRow[row + 2].children[col + 2].style.backgroundColor, tableRow[row + 3].children[col + 3].style.backgroundColor)) {
                    return true;
                }
            }
        }
    }


    function diagonalcheck2() {
        for (let col = 0; col < 4; col++) {
            for (let row = 5; row > 2; row--) {
                if (colorMathCheck(tableRow[row].children[col].style.backgroundColor, tableRow[row - 1].children[col + 1].style.backgroundColor,
                    tableRow[row - 2].children[col + 2].style.backgroundColor, tableRow[row - 3].children[col + 3].style.backgroundColor)) {
                    return true;
                }
            }
        }
    }

    function gelijkCheck() {
        let fullSlot = [];
        for (let i = 0; i < tableCell.length; i++) {
            if (tableCell[i].style.backgroundColor !== 'white') {
                fullSlot.push(tableCell[i]);
            }
        }
        if (fullSlot.length === tableCell.length) {
            return true;
        }
    }
}


reset.addEventListener('click', () => {
    tableSlot.forEach(slot => {
        slot.style.backgroundColor = 'white';

    });
    playerTurn.style.Color = 'black';
    return (currentPlayer === 1 ? playerTurn.textContent = `${player1} is aan de beurt` : playerTurn.textContent = `${player2} is aan de beurt`);
})

