<?php
class ResepView extends ResepController
{
    
    public function show()
    {
        $reseps = $this->getResep(); 
        foreach ($reseps as $resep) { ?>
            <tr>
                <td><?php echo $resep['id']; ?></td>
                <td><?php echo $resep['nama']; ?></td>
            </tr>
        <?php }
    }

   
    public function find()
    {
        $detailResep = $this->getResepById(); 
        if (empty($detailResep))
            return;

        foreach ($detailResep as $detail) { ?>
            <div>
                <h3><?php echo $detail['nama']; ?></h3>
                <p><b>Bahan:</b><br><?php echo nl2br($detail['bahan']); ?></p>
                <p><b>Langkah:</b><br><?php echo nl2br($detail['langkah']); ?></p>
            </div>
        <?php }
    }
}
?>
