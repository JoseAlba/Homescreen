/**
 * Created by Jose on 2017-08-31.
 */
var domAnimator = new DomAnimator();


var frame1 =[
    '   |__                     ',
    '   | W                     ',
    '   |                       ',
    '   |                       ',
    '   | 0__                   ',
    '   | //_|                  ',
    '   |_o|_|______________    '
];

var frame2 = [
    '   |__                     ',
    '   | W                     ',
    '   |                       ',
    '   |  0                    ',
    '   |  /\\_                 ',
    '   |o//_|                  ',
    '   |__|_|______________    '
];
var frame3 = [
    '   |__                     ',
    '   | W                     ',
    '   |                       ',
    '   |  O                    ',
    '   |o/|\                   ',
    '   | /-\                   ',
    '   |/___\______________    '
];
var frame4 = [
    '   |__                     ',
    '   | W                     ',
    '   |                       ',
    '   | /\O                   ',
    '   |  |\/o                 ',
    '   | |-\                   ',
    '   |/___\______________    '
];
var frame5 = [
    '   |__                     ',
    '   | W                     ',
    '   |                       ',
    '   |     O                 ',
    '   |   _/|\_o              ',
    '   |  \_|-\                ',
    '   |______/____________    '
];
var frame6 = [
    '   |__                     ',
    '   | W                     ',
    '   |                       ',
    '   |     o/\O              ',
    '   |        |\/            ',
    '   |       |-\             ',
    '   |______/___\________    '
];
var frame7 = [
    '   |__                     ',
    '   | W                     ',
    '   |                       ',
    '   |         O             ',
    '   |      o_/|\_           ',
    '   |      \_|-\            ',
    '   |__________/________    '
];
var frame8 = [
    '   |__                     ',
    '   | W                     ',
    '   |                       ',
    '   |          O            ',
    '   |         /|\           ',
    '   |       o//-\\          ',
    '   |________/___\______    '
];
var frame9 = [
    '   |__                     ',
    '   | W                     ',
    '   |            |          ',
    '   |       o__O/           ',
    '   |          |            ',
    '   |         /-\           ',
    '   |________/___\______    '
];

var frame10 = [
    '   |__                     ',
    '   | W                     ',
    '   |            |          ',
    '   |       o__O/           ',
    '   |          |            ',
    '   |         /-\           ',
    '   |________<___<______    '
];

var frame11 = [
    '   |__                     ',
    '   | W                     ',
    '   |       o_              ',
    '   |         \O___         ',
    '   |          |            ',
    '   |         /-\           ',
    '   |________/___\______    '
];

var frame12 = [
    '   |__                     ',
    '   | W    o\               ',
    '   |        \O___          ',
    '   |         |             ',
    '   |        /-\            ',
    '   |       /   \           ',
    '   |___________________    '
];

var frame13 = [
    '   |__   o\                ',
    '   | W     \O              ',
    '   |        |\_            ',
    '   |       /-\             ',
    '   |      /   \            ',
    '   |                       ',
    '   |___________________    '
];

var frame14 = [
    '   |__  o\                 ',
    '   | W    \O               ',
    '   |       |\_             ',
    '   |      /-\              ',
    '   |     /   \             ',
    '   |                       ',
    '   |___________________    '
];

var frame15 = [
    '   |__ o\                  ',
    '   | W   \O                ',
    '   |      |\               ',
    '   |     /-\\              ',
    '   |    /   \              ',
    '   |                       ',
    '   |___________________    '
];

var frame16 = [
    '   |__o\                   ',
    '   | W  \O                 ',
    '   |     |\                ',
    '   |    /-\\               ',
    '   |   /   \               ',
    '   |                       ',
    '   |___________________    '
];

var frame17 = [
    '   |_o\                    ',
    '   | W \O                  ',
    '   |    |\                 ',
    '   |   /-\\                ',
    '   |  /   \                ',
    '   |                       ',
    '   |___________________    '
];

var frame18 = [
    '   |__,                    ',
    '   | W \O                  ',
    '   |    |\                 ',
    '   |   /-\\                ',
    '   |  /   \                ',
    '   |                       ',
    '   |___________________    '
];

var frame19 = [
    '   |__,                    ',
    '   | W|O                   ',
    '   | o |\                  ',
    '   |  |-\\                 ',
    '   |  |  \                 ',
    '   |                       ',
    '   |___________________    '
];

var frame20 = [
    '   |__,                    ',
    '   | /O                    ',
    '   |  |\                   ',
    '   | |-\\                  ',
    '   | |  \                  ',
    '   |                       ',
    '   |___________________    '
];

var frame21 = [
    '   |__,                    ',
    '   | /O                    ',
    '   | ||                    ',
    '   |/-\\                   ',
    '   ||o \                   ',
    '   |                       ',
    '   |___________________    '
];

var frame22 = [
    '   |__,                    ',
    '   |0/                     ',
    '   | \\                    ',
    '   |/-\\                   ',
    '   |\  \                   ',
    '   | o                     ',
    '   |___________________    '
];

var frame23 = [
    '   |__,                    ',
    '   | /0                    ',
    '   |/|                     ',
    '   |/-\                    ',
    '   ||  \                   ',
    '   |                       ',
    '   |_o_________________    '
];

var frame24 = [
    '   |__,                    ',
    '   | W|0                   ',
    '   | /|                    ',
    '   |//-\                   ',
    '   | |  \                  ',
    '   | o                     ',
    '   |___________________    '
];

var frame25 = [
    '   |__,                    ',
    '   | W \0                  ',
    '   |  /|                   ',
    '   | //-\                  ',
    '   |  |  \                 ',
    '   |                       ',
    '   |_o_________________    '
];

var frame26 = [
    '   |__ _                   ',
    '   | W  \0                 ',
    '   |   /|                  ',
    '   |  //-\                 ',
    '   |   |  \                ',
    '   | o                     ',
    '   |___________________    '
];

var frame27 = [
    '   |__                     ',
    '   | W                     ',
    '   |   __0                 ',
    '   |    /|                 ',
    '   |   //-\                ',
    '   |    |  \               ',
    '   |_o_________________    '
];

var frame28 = [
    '   |__                     ',
    '   | W                     ',
    '   |                       ',
    '   |     0                 ',
    '   |    /|                 ',
    '   |   //-\                ',
    '   |_o__|__\___________    '
];

var frame29 = [
    '   |__                     ',
    '   | W                     ',
    '   |                       ',
    '   |     0                 ',
    '   |    /|\                ',
    '   |   //-\\               ',
    '   |_o__<__L___________    '
];

var frame30 = [
    '   |__                     ',
    '   | W                     ',
    '   |                       ',
    '   |     0                 ',
    '   |    |||                ',
    '   |    |_|                ',
    '   |_o__|_|____________    '
];

var frame31 = [
    '   |__                     ',
    '   | W                     ',
    '   |                       ',
    '   |     0 /               ',
    '   |   _|||                ',
    '   |    /_|_/              ',
    '   |_o__\______________    '
];

var frame32 = [
    '   |__                     ',
    '   | W                     ',
    '   |                       ',
    '   |    0 __               ',
    '   |  \|||                 ',
    '   |   /_|                 ',
    '   |_o/___\____________    '
];

var frame33 = [
    '   |__                     ',
    '   | W                     ',
    '   |                       ',
    '   |   0 /                 ',
    '   | _|||                  ',
    '   |  /_|_/                ',
    '   |_o\________________    '
];

var frame34 = [
    '   |__                     ',
    '   | W                     ',
    '   |                       ',
    '   |   0                   ',
    '   | _/|\                  ',
    '   |  /_|\                 ',
    '   |_o|_|______________    '
];

var frame35 = [
    '   |__                     ',
    '   | W                     ',
    '   |                       ',
    '   |  0                    ',
    '   |  /\\_                 ',
    '   | //_|                  ',
    '   |_o|_|______________    '
];

var frame36 = [
    '   |__                     ',
    '   | W                     ',
    '   |                       ',
    '   |                       ',
    '   | 0__                   ',
    '   | //_|                  ',
    '   |_o|_|______________    '
];

var frame37 = [
    '   |__                     ',
    '   | W                     ',
    '   |                       ',
    '   |                       ',
    '   | 0__                   ',
    '   | //_|                  ',
    '   |_o|_|______________    '
];

var frame38 = [
    '   |__                     ',
    '   | W                     ',
    '   |                       ',
    '   |                       ',
    '   | 0__                   ',
    '   | //_|                  ',
    '   |_o|_|______________    '
];


domAnimator.addFrame(frame1);
domAnimator.addFrame(frame2);
domAnimator.addFrame(frame3);
domAnimator.addFrame(frame4);
domAnimator.addFrame(frame5);
domAnimator.addFrame(frame6);
domAnimator.addFrame(frame7);
domAnimator.addFrame(frame8);
domAnimator.addFrame(frame9);
domAnimator.addFrame(frame10);
domAnimator.addFrame(frame11);
domAnimator.addFrame(frame12);
domAnimator.addFrame(frame13);
domAnimator.addFrame(frame14);
domAnimator.addFrame(frame15);
domAnimator.addFrame(frame16);
domAnimator.addFrame(frame17);
domAnimator.addFrame(frame18);
domAnimator.addFrame(frame19);
domAnimator.addFrame(frame20);
domAnimator.addFrame(frame21);
domAnimator.addFrame(frame22);
domAnimator.addFrame(frame23);
domAnimator.addFrame(frame24);
domAnimator.addFrame(frame25);
domAnimator.addFrame(frame26);
domAnimator.addFrame(frame27);
domAnimator.addFrame(frame28);
domAnimator.addFrame(frame29);
domAnimator.addFrame(frame30);
domAnimator.addFrame(frame31);
domAnimator.addFrame(frame32);
domAnimator.addFrame(frame33);
domAnimator.addFrame(frame34);
domAnimator.addFrame(frame35);
domAnimator.addFrame(frame36);
domAnimator.addFrame(frame37);
domAnimator.addFrame(frame38);



domAnimator.animate(250);
