<div class="user index content">
    <?= $this->Html->link(__('Nouvel Utilisateur'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('User') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('champ1', 'Libellé du champ 1') ?></th>
                    <th><?= $this->Paginator->sort('champ2', 'Libellé du champ 2') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user): ?>
                    <tr>
                        <td><?= h($user->username) ?></td>
                        <td><?= h($user->email) ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('Voir'), ['action' => 'view', $user->id]) ?>
                            <?= $this->Html->link(__('Modifier'), ['action' => 'edit', $user->id]) ?>
                            <?= $this->Form->postLink(__('Supprimer'), ['action' => 'delete', $user->id], ['confirm' => __('Voulez-vous supprimer cet utilisateur ?')]) ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <?= $this->Paginator->numbers() ?>
        <?= $this->Paginator->next('Suivant') ?>
        <?= $this->Paginator->prev('Précédent') ?>
    </div>
</div>