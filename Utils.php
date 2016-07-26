<?php

namespace humhub\modules\inventory;

use DateTime;

/**
 * Description of CalendarUtils
 *
 * @author luke
 */
class Utils
{

    /**
     *
     * @param DateTime $date1
     * @param DateTime $date2
     * @param type $endDateMomentAfter
     * @return boolean
     */
    public static function isFullDaySpan(DateTime $date1, DateTime $date2, $endDateMomentAfter = false)
    {

        $dateInterval = $date1->diff($date2, true);

        if ($endDateMomentAfter) {
            if ($dateInterval->days > 0 && $dateInterval->h == 0 && $dateInterval->i == 0 && $dateInterval->s == 0) {
                return true;
            }
        } else {
            if ($dateInterval->h == 23 && $dateInterval->i == 59) {
                return true;
            }
        }


        return false;
    }

}
