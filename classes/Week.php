<?php
namespace WeekLibrary;

class Week {
    /**
     * This function is used to fetch current WeekNumber based on CeX business logic
     * 
     * @param N/A 
     *
     * @return int $weekNumber
    */
    public function getCeXWeekNumber()
    {
        $currentDay = date('l');
        switch (strtolower($currentDay)) {
            case 'saturday':
                $tempVar = mktime(0, 0, 0, date('m'), date('d') + 2, date('Y'));
                $weekNumber = date('W', $tempVar);
                break;
            case 'sunday':
                $tempVar = mktime(0, 0, 0, date('m'), date('d') + 1, date('Y'));
                $weekNumber = date('W', $tempVar);
                break;
            case 'monday':
            case 'tuesday':
            case 'wednesday':
            case 'thursday':
            case 'friday':
            default:
                $weekNumber = date('W');
                break;
        }
        return $weekNumber;
    }
}
?>
