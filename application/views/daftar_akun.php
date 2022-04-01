<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title><?=$title?></title>
        <style>
            table 
            {
                border-collapse: collapse;
            }
            table tr,table td, table th 
            {
                border: 1px solid #000000;
                padding: 5px;
                
            }
        </style>
    </head>
    <body>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Lengkap</th>
                    <th>Alamat</th>
                    <th>No.Handphone</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $no = 1;
                    foreach($pengguna as $row)
                    {
                        echo "<tr>";
                        echo "<td>".$no."</td>";
                        echo "<td>".$row->nama_lengkap."</td>";
                        echo "<td>".$row->alamat."</td>";
                        echo "<td>".$row->no_handphone."</td>";
                        echo "</tr>";
                        $no++;
                    }
                ?>
            </tbody>
        </table>
    </body>
</html>