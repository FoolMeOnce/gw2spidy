<?php

namespace GW2Spidy\DB;

use GW2Spidy\DB\om\BaseItem;


/**
 * Skeleton subclass for representing a row from the 'item' table.
 *
 *
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.gw2spidy
 */
class Item extends BaseItem {
    const RARITY_COMMON = 1;

    public function getRarityName() {
        switch ($this->getRarity()) {
            case RARITY_COMMON:    return "Common";
            default:               return "Rarity [{$this->getRarity()}]";
        }
    }

    public function getRarityCSSClass() {
        return strtolower(str_replace(" ", "-", $this->getRarityName()));
    }

} // Item
