<?php
include 'list.php';

$status = false;
$field = 'priority';
$filter = array();
foreach($list as $oryginalkey => $item)
{
    if($status === 'all' || $item['complete'] == $status)
    {
        if(isset($field) && isset($item[$field]))
        {
            $filter[$oryginalkey] = $item[$field];
        }else{
            $filter[$oryginalkey] = $item['priority']+12;
        }
    }
}
asort($filter);
// echo '<prev>';
// var_dump($filter);
// var_dump($status, boolval('all'), $status = 'all');  
// var_dump($filter,$list);
// echo '</prev>';

echo '<table>';
echo "<tr>";
echo '<th>title</th>';
echo '<th>Priority</th>';
echo '<th>Due Date</th>';
echo '<th>Complete</th>';
echo '</tr>';
foreach($filter as $id => $value)
{
    echo '<tr>';
    echo '<td>'.$list[$id] ['title']."<td/>\n";
    echo '<td>'.$list[$id] ['priority']."<td/>\n";
    echo '<td>'.$list[$id] ['due']."<td/>\n";
    echo '<td>';
    if($list[$id]['complete'])
    {
        echo 'Yes';
    }else{
        echo 'No';
    }
    echo "</td>\n";
    echo '</tr>';

}
echo '</table>';

