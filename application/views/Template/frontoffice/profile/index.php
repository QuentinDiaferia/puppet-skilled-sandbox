<?php
$item = $this->fetch('item');
$prependId = uniqid();
?>
<?= form_open($this->fetch('validator'), current_url(), ['class' => 'profile_form']) ?>
<fieldset class="card mb-4">
    <h2 class="card-header bg-dark text-white"><?= lang('profile_label_personal') ?></h2>
    <div class="card-body">

    <?= $this->element(
        'form/block_input',
        [
            'name' => 'first_last_name',
            'input_element' => 'form/info',
            'label' => 'lang:profile_label_first_last_name',
            'id' => $prependId . 'first_last_name',
            'default_value' => $item->first_name . " " . $item->last_name
        ]
    ) ?>

    <?= $this->element(
        'form/block_input',
        [
            'name' => 'email',
            'input_element' => 'form/input',
            'label' => 'lang:profile_label_email',
            'id' => $prependId . 'email',
            'default_value' => $item->email
        ]
    ) ?>

    <?php if (!empty($item->companies)) : ?>
        <?= $this->element(
            'form/label',
            [
                'label' => 'lang:profile_label_companies',
            ]
        ) ?>
        <ul>
            <?php foreach ($item->companies as $company) : ?>
                <li><?= html_escape($company->name) ?></li>
            <?php endforeach ?>
        </ul>
        <?php else : ?>
            <?= $this->element(
            'form/block_input',
            [
                'input_element' => 'form/info',
                'label' => 'lang:profile_label_companies',
                'default_value' => lang('general_label_undefined')
            ]
        ) ?>
    <?php endif ?>

    <div class="row">
        <div class="col-lg-6">
        <?= $this->element(
            'form/block_input',
            [
                'name' => 'phone',
                'input_element' => 'form/input',
                'label' => 'lang:profile_label_phone',
                'id' => $prependId . 'phone',
                'default_value' => $item->phone
            ]
        ) ?>
        </div>
        <div class="col-lg-6">
        <?= $this->element(
            'form/block_input',
            [
                'name' => 'mobile',
                'input_element' => 'form/input',
                'label' => 'lang:profile_label_mobile',
                'id' => $prependId . 'mobile',
                'default_value' => $item->mobile
            ]
        ) ?>
        </div>
    </div>

    <?= $this->element(
        'form/block_input',
        [
            'name' => 'address_1',
            'input_element' => 'form/input',
            'label' => 'lang:profile_label_address_1',
            'id' => $prependId . 'address_1',
            'default_value' => $item->address_1
        ]
    ) ?>

    <?= $this->element(
        'form/block_input',
        [
            'name' => 'address_2',
            'input_element' => 'form/input',
            'label' => 'lang:profile_label_address_2',
            'id' => $prependId . 'address_2',
            'default_value' => $item->address_2
        ]
    ) ?>
    
    <div class="row">
        <div class="col-lg-6">
            <?= $this->element(
                'form/block_input',
                [
                    'name' => 'postcode',
                    'input_element' => 'form/input',
                    'label' => 'lang:profile_label_postcode',
                    'id' => $prependId . 'postcode',
                    'default_value' => $item->postcode
                ]
            ) ?>
        </div>
        <div class="col-lg-6">
            <?= $this->element(
                'form/block_input',
                [
                    'name' => 'town',
                    'input_element' => 'form/input',
                    'label' => 'lang:profile_label_town',
                    'id' => $prependId . 'town',
                    'default_value' => $item->town
                ]
            ) ?>
        </div>
    </div>

    </div>
</fieldset>

<fieldset class="card mb-4">
    <h2 class="card-header bg-dark text-white"><?= lang('profile_label_authentication') ?></h2>
    <div class="card-body">
        <?= $this->element(
            'form/block_input',
            [
                'name' => 'password',
                'input_element' => 'form/input',
                'label' => 'lang:profile_label_password',
                'id' => $prependId . 'password',
                'default_value' => '',
                'extra' => [
                    'type' => 'password'
                ]
            ]
        ) ?>

        <?= $this->element(
            'form/block_input',
            [
                'name' => 'password_confirm',
                'input_element' => 'form/input',
                'label' => 'lang:profile_label_password_confirm',
                'id' => $prependId . 'password_confirm',
                'default_value' => '',
                'extra' => [
                    'type' => 'password'
                ]
            ]
        ) ?>
    </div>
</fieldset>

<fieldset class="card mb-4">
    <h2 class="card-header bg-dark text-white"><?= lang('profile_label_complement') ?></h2>
    <div class="card-body">
        <?= $this->element(
            'form/block_input',
            [
                'name' => 'language',
                'input_element' => 'form/select',
                'label' => 'lang:profile_label_language',
                'id' => $prependId . 'language',
                'default_value' => $item->language,
                'options' => $this->fetch('languages')
            ]
        ) ?>
        <?= $this->element(
            'form/block_input',
            [
                'name' => 'date_format',
                'input_element' => 'form/select',
                'label' => 'lang:profile_label_date_format',
                'id' => $prependId . 'date_format',
                'default_value' => $item->datetime_format,
                'options' => date_format_list(),
            ]
        ) ?>
        <?= $this->element(
            'form/block_input',
            [
                'name' => 'timezone',
                'input_element' => 'form/select',
                'label' => 'lang:profile_label_timezone',
                'id' => $prependId . 'timezone',
                'default_value' => $item->timezone,
                'options' => timezone_list(),
            ]
        ) ?>
    </div>
</fieldset>
<?= $this->element('form/submit', ['label' => 'lang:general_action_save']) ?>
</form>
