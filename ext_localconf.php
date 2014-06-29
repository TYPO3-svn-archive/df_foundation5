<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}
t3lib_extMgm::addPageTSConfig('TCEFORM.tt_content.imageorient.disableNoMatchingValueElement = 1');
t3lib_extMgm::addPageTSConfig('TCEFORM.tt_content.section_frame.addItems.100 = Dropdown klick');
t3lib_extMgm::addPageTSConfig('TCEFORM.tt_content.section_frame.addItems.101 = Dropdown hover');
t3lib_extMgm::addPageTSConfig('TCEFORM.tt_content.section_frame.addItems.110 = ModalBox');
t3lib_extMgm::addPageTSConfig('
mod.wizards.newContentElement.wizardItems {
	common.elements {
		image {
			tt_content_defValues {
				CType = image
				imagecols = 1
			}
		}
		textpic {
			tt_content_defValues {
				CType = textpic
				imageorient = 0
			}
		}
	}
}
');
t3lib_extMgm::addPageTSConfig('
	TCEFORM.tt_content.imageorient.types.image.removeItems = 0,1,2,8,9,10,30,31
	TCEFORM.tt_content {
		tx_dffoundation5_large_left_column.types.image.disabled = 1
		tx_dffoundation5_large_right_column.types.image.disabled = 1
		tx_dffoundation5_medium_left_column.types.image.disabled = 1
		tx_dffoundation5_medium_right_column.types.image.disabled = 1
		tx_dffoundation5_small_left_column.types.image.disabled = 1
		tx_dffoundation5_small_right_column.types.image.disabled = 1
		tx_dffoundation5_left_add.types.image.disabled = 1
		tx_dffoundation5_right_add.types.image.disabled = 1
	}
');
?>