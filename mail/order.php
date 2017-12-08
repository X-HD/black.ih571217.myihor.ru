<div class="table-responsive">
    <table style="width: 100%; border: 1px solid #ddd; border-collapse: collapse;">
        <thead>
        <tr style="background: #f9f9f9;">
            <th style="padding: 8px; border: 1px solid #ddd;">������������</th>
            <th style="padding: 8px; border: 1px solid #ddd;">���-��</th>
            <th style="padding: 8px; border: 1px solid #ddd;">����</th>
            <th style="padding: 8px; border: 1px solid #ddd;">�����</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach($session['cart'] as $id => $item):?>
            <tr>
                <td style="padding: 8px; border: 1px solid #ddd;"><?= $item['name']?></td>
                <td style="padding: 8px; border: 1px solid #ddd;"><?= $item['qty']?></td>
                <td style="padding: 8px; border: 1px solid #ddd;"><?= $item['price']?></td>
                <td style="padding: 8px; border: 1px solid #ddd;"><?= $item['qty'] * $item['price']?></td>
            </tr>
        <?php endforeach?>
        <tr>
            <td colspan="3" style="padding: 8px; border: 1px solid #ddd;">�����: </td>
            <td style="padding: 8px; border: 1px solid #ddd;"><?= $session['cart.qty']?></td>
        </tr>
        <tr>
            <td colspan="3" style="padding: 8px; border: 1px solid #ddd;">�� �����: </td>
            <td style="padding: 8px; border: 1px solid #ddd;"><?= $session['cart.sum']?></td>
        </tr>
        </tbody>
    </table>
</div>