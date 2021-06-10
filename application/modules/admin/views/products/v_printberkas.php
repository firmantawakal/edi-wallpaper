<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Stok Produk</title>
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
    <p style="text-align: center;"><strong>LAPORAN STOK PRODUK EDI WALLPAPER<br /></strong></p>
    <p style="text-align: left; padding-top:10px">Tanggal : <?php echo $date1 ?></p>

    <table style="border-collapse: collapse; width: 100%; height: 54px;" border="1">
    <thead style="height: 18px;">
        <tr>
            <th style="width: 3%; text-align: center; padding:5px">No.</th>
            <th style="width: 20%; text-align: center; padding:5px">Nama Produk</th>
            <th style="width: 20%; text-align: center; padding:5px">Harga Satuan</th>
            <th style="width: 20%; text-align: center; padding:5px">Diskon</th>
            <th style="width: 5%; text-align: center; padding:5px">Jumlah Item</th>
            <th style="width: 20%; text-align: center; padding:5px">Satuan</th>
            <!-- <th style="width: 20%; text-align: center; padding:5px">Status</th> -->
        </tr>
    </thead>
    <tbody>
        
        <?php 
        $no=1;
        foreach ($products as $product) : ?>
        <tr>
            <td>
                <?php echo $no++; ?>
            </td>
            <td>
                <?php echo $product->name; ?>
            </td>
            <td>
                Rp.  <?php echo format_rupiah($product->price); ?>
            </td>
            <td>
                Rp.  <?php echo format_rupiah($product->current_discount); ?>
            </td>
            <td><?php echo $product->stock; ?></td>
            <td><?php echo $product->product_unit; ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
    </table>
   
    
    
</body>

</html>