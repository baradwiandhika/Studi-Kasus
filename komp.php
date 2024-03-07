<?php
    $nilai = 85; 

    $kompeten = ($nilai >= 75) ? 'Kompeten' : 'Belum Kompeten';
    $color = ($nilai >= 75) ? 'green' : 'red';

    echo "Nilai kompetensi Anda {$nilai} : <span style='color: {$color};'>$kompeten</span>";
