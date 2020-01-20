<div class="wrap gc-sermon-message-config-wrap">
    <button type="button" id="all-sort-btn" class="sort-btn">
        <?php echo __('Auto Sort all', 'lcf') ?>
    </button>
    <button type="submit" id="all-update-btn" class="update-btn">
        <?php echo __('Update all', 'lcf') ?>
    </button>
    <button type="reset" id="all-reset-btn" class="reset-btn">
        <?php echo __('Reset all', 'lcf') ?>
    </button>
    <ul class="message-config-list">
        <?php $this->output('items'); ?>
    </ul>
</div>
