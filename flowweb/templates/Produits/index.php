<h1>Produits</h1>
<table>
    <tr>
        <th>En vente</th>
    </tr>
    <?php foreach ($produits as $produit): ?>
        <tr>
            <td>
                <?=h($produit->nom) ?>
            </td>
        </tr>
    <?php endforeach ?>
</table>