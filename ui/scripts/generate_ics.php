<?php 
include '../../wp-load.php';
$pid = '';
if(isset($_GET['e'])){
    $pid = $_GET['e'];
    

//This is the most important coding.
header("Content-Type: text/Calendar");
header("Content-Disposition: inline; filename=event-".strtolower(str_replace(' ','-',get_the_title($pid))).".ics");

echo "BEGIN:VCALENDAR\n";
echo "VERSION:2.0\n";
echo "PRODID:-//Microsoft Corporation//Outlook 12.0 MIMEDIR//EN\n";
echo "CALSCALE:GREGORIAN\n";
echo "METHOD:PUBLISH\n";
echo "BEGIN:VEVENT\n";
echo "DTEND:".str_replace('-','',get_post_meta($pid, '_event_end_date', true))."T".str_replace(':','',get_post_meta($pid, '_event_end_time', true))."\n";
echo "UID:".uniqid()."\n";
echo "DTSTAMP:".date('Ymd')."T".date('His')."\n";
$location = em_get_location(get_post_meta($pid, '_location_id', true)); if($location->location_name != ''){
echo "LOCATION:".$location->location_name."\n";
} else {
echo "LOCATION:none\n";
}
echo "DESCRIPTION:".get_the_title($pid)."\n";
echo "SUMMARY:\n";
echo "DTSTART:".str_replace('-','',get_post_meta($pid, '_event_start_date', true))."T".str_replace(':','',get_post_meta($pid, '_event_start_time', true))."\n";
echo "END:VEVENT\n";
echo "END:VCALENDAR\n";
} else {
    echo 'Calendar ICS file could not be created because of invalid event id.';
} 
?>