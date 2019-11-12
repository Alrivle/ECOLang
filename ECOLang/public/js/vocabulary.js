$.getJSON("https://spreadsheets.google.com/feeds/list/1drpkpwOh-omRcTLbr1EycVLNLBpvY5AySulIYdk9MKk/od6/public/values?alt=json", function(data) {
	vocabWords = data.feed.entry;
	numVocabWords = vocabWords.length;
 });
var flashcard = document.getElementById('flashcard');
var refreshBtns = document.getElementsByClassName('refresh');

flashcard.addEventListener('click', function() {
	this.classList.toggle('flipped');
}, false);

for (i = 0; i < refreshBtns.length; i++) {
	refreshBtns[i].addEventListener('click', function(e) {
		e.stopPropagation();
		e.preventDefault();
		var randomNum = getRandomInt(0, numVocabWords);
		newWord = vocabWords[randomNum];
		var enContent = document.getElementById('flashcard--content_en');
		var esContent = document.getElementById('flashcard--content_es');
		enContent.textContent = newWord.gsx$en.$t;
		esContent.textContent = newWord.gsx$es.$t;
	}, false);
}

function getRandomInt(min, max) {
	return Math.floor(Math.random() * (max - min)) + min;
}
