const choices = ["rock", "paper", "scissors"];
const buttons = document.querySelectorAll("button");
const result = document.getElementById("result");

buttons.forEach(button => {
	button.addEventListener("click", () => {
		let playerChoice = button.id;
		let computerChoice = choices[Math.floor(Math.random() * 3)];
		let winner = getWinner(playerChoice, computerChoice);
		result.style.color='white';
		result.textContent = `You chose ${playerChoice}, computer chose ${computerChoice}. ${winner}`;
	});
});

function getWinner(playerChoice, computerChoice) {
	if (playerChoice === computerChoice) {
		return "It's a tie!";
	} else if (
		(playerChoice === "rock" && computerChoice === "scissors") ||
		(playerChoice === "paper" && computerChoice === "rock") ||
		(playerChoice === "scissors" && computerChoice === "paper")
	) {
		return "You win!";
	} else {
		return "Computer wins!";
	}
}
