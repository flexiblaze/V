// enter the amount of tiles a player gets on each round
var numberOfTiles = 7;

// drag and drop functionality
function allowDrop(ev) {
  ev.preventDefault();
}

function drag(ev) {
  ev.dataTransfer.setData("text", ev.target.id);
  var el = document.getElementById("deck");
  
}

function drop(ev) {
  ev.preventDefault();
  var data = ev.originalEvent.dataTransfer.getData("text");
  ev.target.appendChild(document.getElementById(data)); 
}

$(function() {
  $("table#game td").on("dragover", function(event) {
    event.preventDefault();
    event.stopPropagation();
    $(this).addClass('dragover');
    allowDrop(event);
  });

  $("table#game td").on("dragleave", function(event) {
    event.preventDefault();
    event.stopPropagation();
    $(this).removeClass('dragover');
  });
  
  var thisJokerTile = 'empty';
  $("table#game td").on("drop", function(event) {
    event.preventDefault();
    event.stopPropagation();
    drop(event);
    $(this).removeClass('dragover')
           .addClass('tile_played');
    
    // open the Alphabet selector for joker tiles
    if($(this).children().hasClass('joker')) {
      var rndClass = Math.random()
                        .toString(36)
                        .replace(/[^a-z]+/g, '').substr(0, 5);
      $(this).addClass(rndClass);
      thisJokerTile = rndClass;
      $('#joker_alphabet').css('display', 'flex');
    }
  });

  // when clicking on a letter in the alphabet loaded up by the function above, replace the content of the joker tile with the selected letter
  $('#joker_alphabet span').click(function(event) {
    event.preventDefault();
    event.stopPropagation();
    var letter = $(this).html();
    $('.'+thisJokerTile).empty()
      .html('<div class="draggable_tile '+thisJokerTile+'" draggable="true" ondragstart="drag(event)">' + letter + '<span>0</span></div>');      
    $('#joker_alphabet').fadeOut('fast');
  });

  
  // get 7 random keys from the alphabet (ab) object and stuff the keys in the tiles
  // todo: not get 7 random keys, but actually figure out a way to select tiles from the ab Object and remove the played tiles from the Object
  function getTiles(force) {
    var allKeys = Object.keys(ab);
    for(var i = 0; i < numberOfTiles; i++){
      var rnd = Math.floor( Math.random() * allKeys.length);
      var rndDivId = Math.random()
                         .toString(36).replace(/[^a-z]+/g, '')
                         .substr(0, 5);
      var rndKeys = allKeys[rnd];
      // console.log(ab[rndKeys].tiles);
      var dat = rndDivId + i + '_content';
      var tile = '#ltr0' + i;
      if (!force) {
        // force new tiles on the board, but only when the tile is empty
        if($(tile).html() == 0) {
          $(tile)
            .hide()
            .html('<div class="draggable_tile" draggable="true" ondragstart="drag(event)" id="' + dat + '">' + 
          rndKeys + '<span>' + ab[rndKeys].points + '</span></div>').delay(100).fadeIn('slow');
        }
        // if you force 'force' all new tiles will be loaded, overriding all existing tiles on #player
      } else {
        $(tile)
          .hide()
          .html('<div class="draggable_tile" draggable="true" ondragstart="drag(event)" id="' + dat + '">' + 
        rndKeys + '<span>' + ab[rndKeys].points + '</span></div>').delay(100).fadeIn('slow');
      }
      
      
      // add a helper class to the joker tiles so we can identify them more easily
      $( "div:contains('_')" ).addClass("joker");
    }
  }
  

  // get random letters from alphabet object (ab)
  $('.get').click(function() {
    getTiles();
    // whener START/PLAY button is clicked, freeze played tiles on the board by setting draggable to false and removing ondragstart
    $('table div').attr({
      draggable: "false",
      ondragstart: ""
    });
  });
  
  $('.get_new').click(function() {
    // (1) forces new tiles. leaving this out only loads new tiles in empty slots, til a maximum of 'numberOfTiles'
    getTiles(1);
  });
  
});

// Shuffle tiles
var ul = document.getElementById('deck');
function shuffleNodes() {
  for (var i = ul.children.length; i >= 0; i--) {
    ul.appendChild(ul.children[Math.random() * i | 0]);
  }
}

/* TODO
- make tiles manually sortable with drag n drop
*/


// The alphabet, the values of each letter and the amount of tiles per game (taken from official WordFeud English rules)
var ab = {
  a: {
    tiles: 10,
    points: 1
  },
  b: {
    tiles: 2,
    points: 4
  },
  c: {
    tiles: 2,
    points: 4
  }, 
  d: {
    tiles: 5,
    points: 2
  }, 
  e: {
    tiles: 12,
    points: 1
  }, 
  f: {
    tiles: 2,
    points: 4
  },  
  g: {
    tiles: 3,
    points: 3
  }, 
  h: {
    tiles: 4,
    points: 3
  },
  i: {
    tiles: 9,
    points: 1
  },
  j: {
    tiles: 1,
    points: 10
  },
  k: {
    tiles: 1,
    points: 5
  },
  l: {
    tiles: 4,
    points: 1
  },
  l: {
    tiles: 4,
    points: 1
  },  
  m: {
    tiles: 2,
    points: 3
  },  
  n: {
    tiles: 5,
    points: 2
  },
  n: {
    tiles: 5,
    points: 2
  },
  o: {
    tiles: 6,
    points: 1
  },
  
  p: {
    tiles: 2,
    points: 4
  },
  
  q: {
    tiles: 1,
    points: 10
  },
  r: {
    tiles: 6,
    points: 1
  },

  s: {
    tiles: 5,
    points: 1
  },

  t: {
    tiles: 7,
    points: 1
  },
  
  u: {
    tiles: 4,
    points: 2
  },
  
  v: {
    tiles: 2,
    points: 4
  },
  
  w: {
    tiles: 2,
    points: 4
  },
  
  x: {
    tiles: 1,
    points: 4
  },
  
  y: {
    tiles: 2,
    points: 4
  },
  z: {
    tiles: 1,
    points: 10
  },
  '_': {
    tiles: 2,
    points: 0
  }
};