



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Car Rental Ticket</title>
    <link rel="stylesheet" href="Ticket/style.css" media="all" />
  </head>
  <body>
    <header class="clearfix">
      <div id="logo">
        <img src="Ticket/logo.png">
      </div>
      <div id="company">
        <h2 class="name">Car Rental System</h2>
        <div>Tiyende Pamozi Room 25</div>
        <div>0962743326</div>
        <div><a href="mailto:admin@admin.com">admin@admin.com</a></div>
      </div>
      </div>
    </header>

    <main>

      <div id="details" class="clearfix">


            <div id="client">
              <div class="to">Ticket For:</div>
              <h2 class="name">{{ $reservation -> user->f_name }} {{ $reservation -> user->l_name }}</h2>
              <div class="Phone">{{ $reservation -> user->phone }}</div>
              <div class="email"><a href="admin@admin.com">{{ $reservation->email }}</a></div>
            </div>

            <div id="invoice">
              <h1>Ticket</h1>
              <div class="date">Date of Ticketing: {{ $reservation->pick_up_date }} </div>
              <div class="date">Due Date: {{ $reservation->return_date }}</div>
            </div>
      </div>

      <table>

        <thead>
          <tr>
            <th class="no">#</th>
            <th class="desc">CAR</th>
            <th class="unit">STATE</th>
            <th class="unit">PRICE</th>
            <th class="qty">DAYS</th>
            <th class="total">TOTAL</th>
            <th class="qty">STATUS</th>

          </tr>
        </thead>


        <tbody>
          <tr>
            <td class="no">01</td>
            <td class="desc"><h3>{{ $reservation->car->model }}</h3></td>
            <td class="unit">{{ $reservation->State }}</td>
            <td class="unit">{{ $reservation->car->daily_price }}</td>
            <td class="qty">{{ $reservation->days_num }}</td>
            <td class="total">K{{ $reservation->car->daily_price * $reservation->days_num }}</td>
            <td class="qty">{{ $reservation->status }}</td>
          </tr>

        </tbody>
        <tfoot>
          <tr>
            <td colspan="2"></td>
            <td colspan="2">SUBTOTAL</td>
            <td>K{{ $reservation->car->daily_price * $reservation->days_num }}</td>
          </tr>

          <tr>
            <td colspan="2"></td>
            <td colspan="2">GRAND TOTAL</td>
            <td>K{{ $reservation->car->daily_price * $reservation->days_num }}</td>

          </tr>
        </tfoot>
      </table>

      <div id="thanks">Thank you!</div>
      <div id="notices">
        <div>NOTICE:</div>
        <div class="notice">No Car shall be taken after the ticket is expired </div>
      </div>
    </main>
    <footer>
      Database fun Project
    </footer>
  </body>
</html>
