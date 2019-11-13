class Game {
  constructor() {
    this.dictionary = ["letter", "form", "explode", "frame", "greet", "animated", "disturbed", "entertaining", "meddle", "birds", "whistle", "dead", "slippery", "act", "evanescent", "cushion", "sign", "sticky", "screeching", "anxious", "glamorous", "spiky", "slow", "mark", "sisters", "amuck", "beef", "fantastic", "remind", "afraid", "deranged", "trap", "cover", "stage", "ship", "steep", "resonant", "profuse", "typical", "uneven", "apathetic", "damaging", "quiver", "calculator", "veil", "capable", "event", "coal", "part", "lazy", "visitor", "flame", "voiceless", "mate", "lame", "channel", "grubby", "spare", "marvelous", "even", "solid", "magnificent", "shame", "hug", "year", "club", "route", "aquatic", "hollow", "eye", "elegant", "taste", "straight", "door", "cattle", "annoy", "neat", "touch", "bucket", "snow", "wakeful", "standing", "clear", "step", "damage", "hum", "synonymous", "pocket", "month", "arrive", "dazzling", "physical", "walk", "run", "shirt", "level", "battle", "woozy", "scarf", "towering", "reign", "point", "raise", "communicate", "taste", "men", "treat", "sloppy", "lackadaisical", "coach", "bead", "embarrass", "reproduce", "fluffy", "flashy", "shiny", "charming", "great", "spicy", "skillful", "early", "materialistic", "purring", "wicked", "name", "ethereal", "boast", "north", "shallow", "steady", "ancient", "seat", "alluring", "fascinated", "classy", "preserve", "succeed", "acoustic", "twig", "fly", "porter", "piquant", "look", "afterthought", "plastic", "lock", "friend", "false", "stop", "story", "teeny", "anger", "tart", "wriggle", "bawdy", "hill", "scold", "soggy", "money", "tray", "detect", "obsolete", "obnoxious", "alleged", "yell", "curl", "graceful", "imagine", "frequent", "back", "cloudy", "land", "astonishing", "oval", "snow", "pumped", "surround", "outstanding", "mailbox", "soap", "brave", "punch", "eager", "easy", "precious", "scrawny", "beg", "stuff", "kitty", "yarn", "pancake", "pedal", "excuse", "breakable", "yawn", "lumber", "preach", "naive", "call", "heap", "flat", "chicken", "spotted", "macabre", "suffer", "tawdry", "ugly", "scarecrow", "skate", "remarkable", "playground", "table", "jellyfish", "sore", "unsightly", "laughable", "innate", "wanting", "invent", "various", "plucky", "cool", "hospital", "vast", "judge", "land", "temporary", "line", "quill", "care", "spark", "drain", "ultra", "knowledgeable", "foot", "book", "dynamic", "tasteless", "heartbreaking", "doubtful", "sable", "disagree", "colossal", "feeble", "last", "repair", "flesh", "strip", "grip", "heat", "scattered", "memory", "duck", "use", "charge", "decisive", "tree", "moor", "ray", "lethal", "nod", "behave", "promise", "sun", "truck", "riddle", "rich", "bitter", "string", "deserve", "momentous", "practice", "pop", "bells", "kind", "able", "crash", "half", "fix", "cagey", "dark", "dizzy", "hammer", "name", "hard", "rabid", "marked", "voracious", "team", "condition", "verdant", "cap", "handsome", "hour", "secretary", "vase", "tense", "tasty", "support", "stone", "nonchalant", "monkey", "rambunctious", "increase", "obeisant", "coherent", "rat", "gorgeous", "vivacious", "fretful", "slow", "healthy", "cent", "certain", "low", "science", "earthy", "space", "previous", "basketball", "peck", "damaged", "drawer", "elastic", "gather", "mourn", "fail", "imaginary", "magenta", "stereotyped", "recess", "guarantee", "man", "milk", "copper", "kiss", "station", "racial", "fixed", "eatable", "boy", "ticket", "heal", "misty", "fear", "provide", "trade", "beam", "secret", "roll", "zonked", "pull", "lewd", "own", "halting", "electric", "crabby", "cream", "abaft", "fresh", "search", "cherries", "feigned", "notebook", "rotten", "join", "spotless", "arm", "island", "value", "donkey", "attempt", "wet", "stitch", "sail", "friction", "groan", "quickest", "literate", "necessary", "sleepy", "bird", "miniature", "wrench", "sturdy", "limping", "expansion", "bore", "rose", "meal", "butter", "wretched", "milk", "toothsome", "upset", "minute", "frightened", "crooked", "fierce", "spark", "rare", "screw", "dinosaurs", "harsh", "omniscient", "snail", "screw", "texture", "abortive", "base", "poke", "trick", "five", "loose", "file", "harmony", "manage", "undesirable", "notice", "trick", "crowd", "gray", "snore", "wandering", "bless", "prefer", "barbarous", "pretty", "rail", "mammoth", "boiling", "unusual", "rapid", "chin", "tug", "train", "troubled", "announce", "bleach", "dream", "flowers", "show", "wistful", "willing", "observe", "interrupt", "knot", "middle", "laborer", "desire", "fruit", "dress", "exultant", "squeak", "adhesive", "bent", "moaning", "desert", "offend", "adamant", "filthy", "flash", "caption", "self", "root", "add", "berry", "worthless", "creator", "like", "shop", "reject", "treatment", "fork", "clammy", "farm", "unadvised", "swift", "tightfisted", "badge", "rice", "number", "branch", "eminent", "brush", "stove", "fair", "things", "bulb", "airplane", "rule", "impartial", "fear", "mountain", "permit", "high", "pale", "sore", "hot", "bee", "thought", "unnatural", "three", "friendly", "jittery", "wrong", "enormous", "abrasive", "apologize", "control", "testy", "grease", "hypnotic", "look", "action", "thing", "cake", "pleasure", "premium", "rabbit", "punish", "tranquil", "reflective", "zoom", "brief", "itchy", "youthful", "note", "observant", "quicksand", "try", "pollution", "dapper", "crowded", "tour", "ashamed", "scare", "welcome", "waggish", "rock", "order", "houses", "shoe", "birth", "round", "lick", "driving", "side", "stir", "hulking", "transport", "frail", "pump", "yard", "claim", "ripe", "phone", "war", "brown", "gamy", "uptight", "plastic", "bedroom", "geese", "title", "hideous", "obedient", "dress", "mass", "volleyball", "callous", "faded", "tail", "relax", "question", "lovely", "rightful", "tan", "cars", "conscious", "groovy", "slap", "fanatical", "camera", "faint", "lively", "form", "boil", "peel", "tasteful", "songs", "children", "purpose", "nippy", "tub", "tip", "oceanic", "radiate", "hallowed", "hissing", "hate", "brake", "arrest", "plausible", "potato", "weak", "box", "aback", "party", "pot", "tremendous", "inconclusive", "comfortable", "delicate", "grade", "living", "free", "ghost", "experience", "highfalutin", "smile", "trip", "describe", "suppose", "hammer", "colorful", "glove", "head", "waiting", "true", "rub", "drum", "improve", "play", "hose", "mark", "sense", "wax", "support", "drunk", "repulsive", "dare", "hungry", "shoes", "rely", "jelly", "jumbled", "lake", "ambiguous", "stupid", "wool", "nimble", "kick", "spurious", "trees", "current", "need", "deeply", "arrogant", "throat", "flag", "curtain", "unite", "eyes", "doubt", "woebegone", "tacit", "quixotic", "thoughtful", "calm", "lie", "disastrous", "sulky", "giants", "ossified", "swing", "lace", "cry", "unaccountable", "amazing", "market", "scent", "beautiful", "scintillating", "inject", "kick", "bad", "spotty", "brass", "placid", "vessel", "zephyr", "instruct", "excite", "start", "clover", "hot", "versed", "nest", "spy", "lunchroom", "tendency", "pear", "pail", "equable", "mute", "branch", "cart", "nutritious", "bike", "industry", "change", "country", "step", "sordid", "growth", "beds", "invincible", "needle", "shelf", "advertisement", "structure", "books", "messy", "glue", "close", "scrape", "mushy", "shivering", "bell", "trust", "wrathful", "utopian", "condemned", "fence", "deadpan", "identify", "rainstorm", "glow", "metal", "blush", "locket", "thinkable", "famous", "futuristic", "chilly", "mix", "snobbish", "nonstop", "foregoing", "third", "whip", "dislike", "useful", "request", "rainy", "huge", "plantation", "zipper", "baseball", "squealing", "fry", "machine", "long", "mysterious", "splendid", "picture", "sassy", "burn", "flavor", "collar", "post", "cable", "bathe", "saw", "defective", "precede", "bright", "lumpy", "lively", "wish", "tangy", "pets", "past", "tremble", "cluttered", "moon", "silver", "faulty", "unkempt", "satisfy", "drip", "rampant", "park", "wail", "shake", "ajar", "laugh", "phobic", "nondescript", "righteous", "invite", "needy", "railway", "eggnog", "unsuitable", "destruction", "pigs", "tramp", "van", "scatter", "abounding", "broken", "stitch", "calendar", "expensive", "remain", "military", "airport", "tame", "spell", "discreet", "bomb", "cup", "amuse", "town", "tough", "peace", "silk", "suit", "threatening", "ruddy", "toothbrush", "nerve", "dog", "vacuous", "six", "summer", "sort", "functional", "clap", "worried", "guard", "terrify", "sweltering", "cheat", "noxious", "card", "perform", "arrange", "society", "move", "milky", "reason", "bomb", "love", "industrious", "bow", "trouble", "twist", "attack", "tedious", "spray", "water", "difficult", "clever", "sister", "erratic", "scene", "quaint", "spoon", "finicky", "impulse", "immense", "brainy", "annoyed", "pleasant", "orange", "toad", "check", "zebra", "trade", "dreary", "cellar", "young", "sound", "push", "interest", "oatmeal", "sharp", "bubble", "idea", "include", "hellish", "sea", "approval", "ink", "poison", "cannon", "ring", "yoke", "nifty", "regret", "swim", "pipe", "paint", "view", "horses", "follow", "same", "overflow", "bury", "comparison", "mere", "influence", "scandalous", "complain", "cold", "superb", "pass", "reading", "nauseating", "pat", "hurt", "fluttering", "circle", "basin", "husky", "spectacular", "womanly", "taboo", "peaceful", "territory", "dependent", "tense", "ill", "count", "plant", "unbiased", "vest", "bustling", "worm", "stop", "keen", "tacky", "agreeable", "writer", "grandmother", "rifle", "careless", "vulgar", "school", "frighten", "dam", "craven", "ablaze", "mine", "innocent", "abhorrent", "abusive", "grain", "fireman", "miscreant", "furniture", "ambitious", "offbeat", "eggs", "gigantic", "wink", "didactic", "roasted", "cough", "skin", "abundant", "overjoyed", "addition", "slope", "abject", "person", "wash", "ground", "rate", "cheer", "mellow", "zealous", "attractive", "appear", "fabulous", "dance", "arithmetic", "numberless", "offer", "steel", "trail", "pause", "connect"];
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
    this.maxLength = document.querySelector('.max-length');
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
    this.banner.style.backgroundColor = '#f00';
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
    this.maxLength.innerText = '0';
    this.submit.style.marginTop = '80px';
  }

  showError(error) {
    this.banner.innerText = error;
    this.banner.style.opacity = 1;
    this.banner.style.backgroundColor = '#f00';
    setTimeout(this.hideBanner, 3000);
    this.banner.classList.remove('error');
  }

  showWin() {
    document.querySelector(".banner").style.backgroundColor = '#0a0';
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
      if (event.keyCode == 13) {
        let input = document.querySelector('.guess').value;
        this.playerMove(input);
      }
      if (event.target.value.length > 0) {
        this.maxLength.innerText = '1';
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