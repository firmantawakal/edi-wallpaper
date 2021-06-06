<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Penjualan</title>
    <style>
        table>tbody>tr>td{
            padding:5px;
        }

        @media print {
            #printpage {
                display: none;
            }
        }
    </style>
</head>

<body>
    <button id="printpage" onclick="window.print()">Print</button>
    <p>&nbsp;</p>
    <p style="text-align: center;"><strong>LAPORAN PENJUALAN EDI WALLPAPER<br /></strong></p>
    <p style="text-align: left; padding-top:10px">Tanggal : <?php echo $date1?> - <?php echo $date2?></p>

    <table style="border-collapse: collapse; width: 100%; height: 54px;" border="1">
    <thead style="height: 18px;">
        <tr>
            <th style="width: 3%; text-align: center; padding:5px">No.</th>
            <th style="width: 20%; text-align: center; padding:5px">ID</th>
            <th style="width: 20%; text-align: center; padding:5px">Customer</th>
            <th style="width: 20%; text-align: center; padding:5px">Tanggal</th>
            <th style="width: 5%; text-align: center; padding:5px">Jumlah Item</th>
            <th style="width: 20%; text-align: center; padding:5px">Jumlah Harga</th>
            <th style="width: 20%; text-align: center; padding:5px">Status</th>
        </tr>
    </thead>
    <tbody>
        
        <?php 
        $no=1;
        foreach ($orders as $order) : ?>
        <tr>
            <td>
                <?php echo $no++; ?>
            </td>
            <td>
                <?php echo '#' . $order->order_number; ?>
            </td>
            <td><?php echo $order->customer; ?></td>
            <td>
                <?php echo get_formatted_date($order->order_date); ?>
            </td>
            <td>
                <?php echo $order->total_items; ?>
            </td>
            <td>
                Rp <?php echo format_rupiah($order->total_price); ?>
            </td>
            <td><?php echo get_order_status($order->order_status, $order->payment_method); ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
    </table>
   
    
    
</body>

</html>