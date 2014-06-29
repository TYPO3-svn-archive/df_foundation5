
//$(document).foundation();
jQuery(document).foundation(); 

// fix simultaneous use of Equalizer and Interchange
jQuery(document).on('replace', 'img', function() {
	jQuery(document).foundation('equalizer', 'reflow');
});

