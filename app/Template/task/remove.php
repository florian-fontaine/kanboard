<div class="page-header">
    <h2><?= t('Remove a task') ?></h2>
</div>

<div class="confirm">
    <p class="alert alert-info">
        <?= t('Do you really want to remove this task: "%s"?', $this->text->e($task['title'])) ?>
    </p>

    <div class="form-actions">
        <?= $this->url->link(t('Yes'), 'TaskViewController', 'remove', array('task_id' => $task['id'], 'project_id' => $task['project_id'], 'confirmation' => 'yes'), true, 'btn btn-red popover-link') ?>
        <?= t('or') ?>
        <?= $this->url->link(t('cancel'), 'TaskViewController', 'show', array('task_id' => $task['id'], 'project_id' => $task['project_id']), false, 'close-popover') ?>
    </div>
</div>
