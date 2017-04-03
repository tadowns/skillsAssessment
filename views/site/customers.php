<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

?>
<div>
    <p>
        Customers:
    </p>
    <?= Html::a('New', ['newcustomer', 'new' => true], ['class' => 'btn btn-primary btn-sm']) ?>
    <table class="table">
      <thead>
        <tr>
          <th>
          </th>
          <th>
          </th>
          <th>
            id
          </th>
          <th>
            countryOfCitizenship
          </th>
          <th>
            primaryCountryDestination
          </th>
          <th>
            primaryStateDestination
          </th>
          <th>
            dateOfBirth
          </th>
          <th>
            startTravelDate
          </th>
          <th>
            endTravelDate
          </th>
          <th>
            status
          </th>
          <th>
            dependent
          </th>
        </tr>
      </thead>
      <tbody>
    <?php foreach ($customers as $key => $customer): ?>
      <tr>
        <td>
          <?= Html::a('View', ['customer', 'id' => $customer->id], ['class' => 'btn btn-primary btn-sm']) ?>
        </td>
        <td>
          <?= Html::a('Delete', ['deletecustomer', 'id' => $customer->id], ['class' => 'btn btn-danger btn-sm']) ?>
        </td>
        <td>
          <?= $customer->id ?>
        </td>
        <td>
          <?= $customer->country_of_citizenship ?>
        </td>
        <td>
          <?= $customer->primary_country_destination ?>
        </td>
        <td>
          <?= $customer->primary_state_destination ?>
        </td>
        <td>
          <?= $customer->date_of_birth ?>
        </td>
        <td>
          <?= $customer->start_travel_date ?>
        </td>
        <td>
          <?= $customer->end_travel_date ?>
        </td>
        <td>
          <?php $var = array(
                  0 => 'Student',
                  1 => 'OPT/Scholar',
                  2 => 'Traveler'
                );
                echo $var[$customer->status];
            ?>
        </td>
        <td>
          <?= ($customer->dependent == 0)?"False":"True" ?>
        </td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>
</div>
