/**
 * >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
 * braille
 * https://github.com/Nonemoticoner/braille
 * >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
 * Modify: @Jok4r_DeVs
 *>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
 * Copyright (c) 2015-2018 Nonemoticoner
 * Licensed under the MIT license.
 * >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
 */
// OBJETO LETRAS BRAILE
var BRAILLE = {
  ' ': '⠀',   // space bar to dot-0
  '_': '⠸',
  '-': '⠤',
  ',': '⠠',
  ';': '⠰',
  ':': '⠱',
  '!': '⠮',
  '?': '⠹',
  '.': '⠨',
  '(': '⠷',
  '[': '⠪',
  '@': '⠈',
  '*': '⠡',
  '/': '⠌',
  '\'': '⠄',
  '\"': '⠐',
  '\\': '⠳',
  '&': '⠯',
  '%': '⠩',
  '^': '⠘',
  '+': '⠬',
  '<': '⠣',
  '>': '⠜',
  '$': '⠫',
  '0': '⠴',
  '1': '⠂',
  '2': '⠆',
  '3': '⠒',
  '4': '⠲',
  '5': '⠢',
  '6': '⠖',
  '7': '⠶',
  '8': '⠦',
  '9': '⠔',
  'A': '⠁',
  'B': '⠃',
  'C': '⠉',
  'D': '⠙',
  'E': '⠑',
  'F': '⠋',
  'G': '⠛',
  'H': '⠓',
  'I': '⠊',
  'J': '⠚',
  'K': '⠅',
  'L': '⠇',
  'M': '⠍',
  'N': '⠝',
  'O': '⠕',
  'P': '⠏',
  'Q': '⠟',
  'R': '⠗',
  'S': '⠎',
  'T': '⠞',
  'U': '⠥',
  'V': '⠧',
  'W': '⠺',
  'X': '⠭',
  'Z': '⠵',
  ']': '⠻',
  '#': '⠼',
  'Y': '⠽',
  ')': '⠾',
  '=': '⠿'
}
// OBJETO COMP ASCII
ASCII = {
  ' ': ' ',   // space bar to space bar
  '⠀': ' ',   // dot-0 to space bar
  '⠸': '_',
  '⠤': '-',
  '⠠': ',',
  '⠰': ';',
  '⠱': ':',
  '⠮': '!',
  '⠹': '?',
  '⠨': '.',
  '⠷': '(',
  '⠪': '[',
  '⠈': '@',
  '⠡': '*',
  '⠌': '/',
  '⠄': '\'',
  '⠐': '\"',
  '⠳': '\\',
  '⠯': '&',
  '⠩': '%',
  '⠘': '^',
  '⠬': '+',
  '⠣': '<',
  '⠜': '>',
  '⠫': '$',
  '⠴': '0',
  '⠂': '1',
  '⠆': '2',
  '⠒': '3',
  '⠲': '4',
  '⠢': '5',
  '⠖': '6',
  '⠶': '7',
  '⠦': '8',
  '⠔': '9',
  '⠁': 'A',
  '⠃': 'B',
  '⠉': 'C',
  '⠙': 'D',
  '⠑': 'E',
  '⠋': 'F',
  '⠛': 'G',
  '⠓': 'H',
  '⠊': 'I',
  '⠚': 'J',
  '⠅': 'K',
  '⠇': 'L',
  '⠍': 'M',
  '⠝': 'N',
  '⠕': 'O',
  '⠏': 'P',
  '⠟': 'Q',
  '⠗': 'R',
  '⠎': 'S',
  '⠞': 'T',
  '⠥': 'U',
  '⠧': 'V',
  '⠺': 'W',
  '⠭': 'X',
  '⠵': 'Z',
  '⠻': ']',
  '⠼': '#',
  '⠽': 'Y',
  '⠾': ')',
  '⠿': '='
};
// OBJETO CONVERSOR BRAILE
module_convert = {
  // COMPRARDOR CARACTERES 
  convert: function (character) {
      // return !!BRAILLE[character] ? BRAILLE[character] : '?';
      return !!BRAILLE[character] ? BRAILLE[character] : '?';
  },
  // COMPARADOR SIMBOLOS
  read: function (symbol) {
      return !!ASCII[symbol] ? ASCII[symbol] : '?';
  },
  // CONVERSOR TEXTO A BRAILLE
  toBraille: function (text) {
      
      var upperText, upperTextLength, brailleText, i;

      upperText = text.toUpperCase();
      upperTextLength = upperText.length;
      brailleText = '';

      for (i = 0; i < upperTextLength; i++) {
          brailleText += this.convert(upperText[i]);
      }

      return brailleText;
  },
  // CONVERSOR BRAILLE A TEXTO
  toText: function (code) {
    var codeLength, asciiText, i;

    codeLength = code.length;
    asciiText = '';

    for (i = 0; i < codeLength; i++) {
        asciiText += this.read(code[i]);
    }

    return asciiText;
  }

};


/*
const synth = window.speechSynthesis
let text = "Hola como estas?"
const utterThis = new SpeechSynthesisUtterance(text)
utterThis.lang = 'es-ES';
synth.speak(utterThis)
*/