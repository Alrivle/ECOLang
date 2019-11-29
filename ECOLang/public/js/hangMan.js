function sleep(milliseconds) {
  var start = new Date().getTime();
  for (var i = 0; i < 1e7; i++) {
    if ((new Date().getTime() - start) > milliseconds){
      break;
    }
  }
}

class Game {
  constructor() {
    this.dictionary = ["letter", "form", "explode", "frame","animated",
    "entertaining", "meddle", "birds", "dead", "act", "cat", "sun", "steal", "arm", 
    "gold", "start", "slow", "mark", "sister", "brother", "ball", "fantastic", "remind", "afraid", "trick", 
    "cover", "stage", "ship", "step","calculator", "event", "cut", "part", "lazy", "visitor", "fork", "mouse", 
    "land", "channel", "marvelous", "even", "solid", "shame", "hug", "year", "club", "route", 
    "eye", "elegant", "tail", "stone", "door", "cup", "win", "notebook", "touch", "bucket", "snow", "clear",
    "damage", "human", "salt", "pocket", "month", "arrive", "physical", "walk", "run", "shirt", "level", "battle", "walk", 
    "scarf", "tower", "restart", "point", "raise", "communication", "taste", "men", "treat", "coach", "bead", "reproduce", "shine", 
    "children", "great", "clap","early","popcorn", "name", "entry", "boat", "north","steal", "ancient", "seat", "alone", 
    "fascinated", "class", "pointer", "succeed", "acoustic", "top", "fly", "foward", "pink", "look", "plastic", "lock", 
    "friend", "false", "stop", "story", "teenager", "anger", "house", "store", "sleep", "money", "went", "detect", "obbey", 
    "yellow", "forget", "great", "imagine", "frequent", "back", "cloud", "land","own", "snow", "pumped", "surround", 
    "outstanding", "mail", "soap", "brave", "easy", "precious", "kick", "beard", "stuff", "kitty", 
    "lost", "pancake", "pet", "excuse", "break", "bark", "number", "blue", "call", "ugly","skate", 
    "remarkable", "playground", "table", "selfish", "score", "want", "invent", "push", "cool", "hospital", 
    "judge", "land", "temporary", "line", "clock", "care", "shine", "drain","foot", "book", "dynamic",
    "heart", "doubt", "disagree", "agree", "flag", "last", "repair", "fly", 
    "hat", "sreen", "memory", "duck", "use", "charge", "decisive", "tree", "more","behave", 
    "promise", "sun", "truck", "ride", "rich", "bitter", "string", "deserve", "momentous", "practice", "pop", "bells", 
    "kind", "able", "crash", "half", "fix", "sweet", "dark", "soldier", "hammer", "name", "hard", "rabbit", "marked", 
    "vacations", "team", "condition","cap", "handsome", "hour", "secretary", "bubble", "played", "come", "support", 
    "stone", "monkey", "increase", "opponent", "rocket", "rat", "guide", "slow", "health", "cent", "certain", "low", 
    "science", "earth", "space", "previous", "basketball", "pick", "damaged", "draw", "elastic", "gain", "mountain", "fail", 
    "imagine", "manage", "guarantee", "man", "milk", "cost", "kiss", "station", "record", "fixed", "table", "boy", 
    "ticket", "hear", "ear", "fear", "provide", "trade", "mouth", "secret", "roll", "pull", "own", "electric", "body", 
    "cream", "legs", "fresh", "search", "cherries", "hands", "notebook", "backpack", "join", "orange", "arm", "island", 
    "value", "donkey", "apple", "wet", "wing", "art", "friction", "main", "quick", "book", "necessary", "sleepy", 
    "bird", "miniature", "bones", "study", "climb", "expansion", "board", "rose", "honney", "butter", "waist", "milk", 
    "upset", "minute", "frightened", "cookie", "fire", "spark", "rare", "scream", "dinosaurs", "hard", "nails", "alone", 
    "texture", "color", "base", "background", "trick", "five", "loose", "file", "bean", "pear", "undesirable", "notice", 
    "trick", "crowd", "gray", "shop", "question", "bless", "prefer", "blind", "pretty", "rain","raining", "unusual", 
    "fast", "chin", "trooper", "train", "trouble", "announce", "dream", "flowers", "show", "artist", "willing", 
    "observe", "interrupt", "know", "middle", "select", "desire", "fruit", "dress", "jeans", "cap", "adhesive", 
    "bent", "lips", "desert", "offend", "admire", "huge", "flash", "caption", "self", "root", "add", "grapes", 
    "grades", "creator", "like", "shop", "reject", "treatment", "fork", "calm", "farm","swim", "garbage", 
    "rice", "number", "branch", "eminent", "blonde", "oven", "fair", "things", "caption", "airplane", "rule", 
    "ghost", "fear", "mountain", "permit", "high", "puppy", "computer", "hot", "bee", "thought", "natural", 
    "three", "friendly", "sneakers", "wrong", "enormous", "papers", "apologize", "control", "test", "grass", 
    "hypnotic", "look", "action", "thing", "cake", "pleasure", "premium", "rabbit", "punish",
    "zoom", "brief","note", "observe", "try", "pollution", "jump", "crowded", "tour", 
    "scare", "welcome", "rock", "order", "houses", "shoe", "birth", "round", 
    "found", "transport", "fail", "road", "phone", "war", "brown", "plastic", 
    "bedroom","title", "obedient", "dress", "basketball", "volleyball", "tail", "relax", 
    "question", "lovely", "cars", "conscious","camera",  
    "boil", "songs", "children", "purpose","hate", "brake", "arrest", "potato", 
    "weak", "box", "party", "pot","living", "free", "ghost", "experience",
    "smile", "trip", "describe", "suppose", "hammer", "colorful", "glove", "head", "waiting", "true", "drum", "improve", "play", 
    "support", "drunk", "hungry", "shoes", "rely","lake", "ambiguous"];
    this.words = [];
    this.used = [];
    this.wins = 0;
    this.losses = 0;
    this.controls = document.querySelector('.controls');
    this.newGameBtn = document.querySelector('.new-game');
    this.livesContainer = document.querySelector('.lives');
    this.wordContainer = document.querySelector('.word');
    this.input = document.querySelector('.guess');
    this.banner = document.querySelector('.banner');
    this.submit = document.querySelector('.submit');
    this.guesses = document.querySelector('.guesses');
    this.winsContainer = document.querySelector('.wins span');
    this.lossesContainer = document.querySelector('.losses span');
    this.init();
    this.bindEvents();
  }

  init() {
    this.word = null;
    this.letters = null;
    this.tries = 0;
    this.remainingTries = 10;
    this.totalTries = 10;
    this.validLetters = 0;
    this.guessedLetters = [];
    this.words = [...this.dictionary];
    this.reset();
    this.chooseWord();
    this.drawGame();
  }

  reset() {
    this.words = [];
    this.used = [...this.dictionary];
    while (this.used.length > 0) {
      let randomNum = Math.floor(Math.random() * this.used.length);
      let word = this.used.splice(randomNum, 1)[0];
      this.words.push(word);
    }
  }

  newGame() {
    this.init();
    this.reset();
    this.guesses.innerHTML = '';
    this.controls.style.opacity = 1;
    this.banner.style.opacity = 0;
    this.newGameBtn.style.display = "none";
    this.chooseWord();
    this.drawGame();
  }

  chooseWord() {
    if (this.words.length === 0) {
      this.reset();
    }

    let word = this.words.pop();
    this.word = word;
    this.used.push(word);
  }

  drawGame() {
    let html = "";
    for (let i = 0; i < this.word.length; i++) {
      html += '<span class="letter"> </span>';
    }
    this.wordContainer.innerHTML = html;
    this.letters = document.querySelectorAll('.letter');
    this.drawLives();
  }

  drawLives() {
    let str = "";
    const h = `<span class="heart">❤️</span>`;
    const ouch = `<span class="ouch">💔</span>`;
    for (let i = 0; i < this.remainingTries; i++) {
      str += h;
    }
    if (this.remainingTries < 10) {
      for (let i = 0; i < 10 - this.remainingTries; i++) {
        str = ouch + str;
      }
    }
    this.livesContainer.innerHTML = str;
  }

  playerMove(guess) {

    // if player has entered anything but a letter, show error
    if (!guess || !guess.match(/[A-Za-z]/)) {
      this.showError("Oops! Please try again.");
      this.clearInput();
      return;
    }

    let breakout = false;
    this.guessedLetters.forEach(letter => {
      if (letter.guess === guess.toLowerCase()) {
        this.showError("You've already tried that letter!");
        this.clearInput();
        breakout = true;
      }
    });
    if (breakout) {
      return;
    }

    this.guess = guess.toLowerCase(); // a

    this.clearInput();

    let valid = false;

    // business logic
    if (this.word.includes(this.guess)) {
      valid = true;
      for (let i = 0; i < this.word.length; i++) {
        // loop through f r a n k
        if (this.word[i] === this.guess) {
          this.letters[i].innerHTML = this.guess.toUpperCase();
          this.validLetters += 1;
        }
      }
    } else {
      // "pig" does not include "a"
      if (!this.word.includes(this.guess)) {
        if (this.remainingTries > 0) {
          this.tries += 1;
          this.remainingTries -= 1;
          this.drawLives();
          this.checkLoss();
        } else {
          this.checkLoss();
          return;
        }
      }
    }

    this.guessedLetters.push({ guess: this.guess, valid });

    let htmlStr = "";
    this.guessedLetters.forEach(letter => {
      htmlStr += "<span class='guessed-letter";
      if (letter.valid) {
        htmlStr += " valid-letter";
      }
      htmlStr += `'>${letter.guess}</span>`;
    });
    document.querySelector('.guesses').innerHTML = htmlStr;

    this.checkWin();
  }

  checkLoss() {
    if (this.remainingTries === 0) {
      this.showLoss();
    }
  }

  showLoss() {
    this.banner.innerText = "Game Over 😢";
    this.banner.style.opacity = 1;
    this.banner.style.backgroundColor = '#F8436E';
    this.controls.style.opacity = 0;
    this.newGameBtn.style.display = "block";

    this.letters.forEach((letter, index) => {
      if (letter.innerText === "") {
        letter.classList.add('fail');
        letter.innerText = this.word[index].toUpperCase();
      }
    });

    this.losses += 1;
    this.lossesContainer.innerText = this.losses;
  }

  checkWin() {
    if (this.validLetters === this.word.length) {
      this.showWin();
    }
  }

  clearInput() {
    this.input.value = "";
    this.submit.style.marginTop = '80px';
  }

  showError(error) {
    this.banner.innerText = error;
    this.banner.style.opacity = 1;
    this.banner.style.backgroundColor = '#F8436E';
    setTimeout(this.hideBanner, 3000);
    this.banner.classList.remove('error');
  }

  showWin() {
    document.querySelector(".banner").style.backgroundColor = '#228B22';
    this.banner.innerText = "Congrats! You won. 🏆";
    this.banner.style.opacity = 1;
    this.controls.style.opacity = 0;
    this.newGameBtn.style.display = "block";
    this.wins += 1;
    this.winsContainer.innerText = this.wins;
  }

  hideBanner() {
    document.querySelector('.banner').style.opacity = 0;
  }

  
  bindEvents() {
    this.input.addEventListener('keyup', event => {
        let input = document.querySelector('.guess').value;
        this.playerMove(input);
      sleep(209);
      if (event.target.value.length > 0) {
        this.submit.style.marginTop = 0;
      } else {
        this.maxLength.innerText = '0';
        this.submit.style.marginTop = '80px';
      }
    });

    this.submit.addEventListener('click', event => {
      let input = document.querySelector('.guess').value;
      this.playerMove(input);
    });

    this.newGameBtn.addEventListener('click', event => {
      this.reset();
      this.newGame();
    });
  }}


const game = new Game();