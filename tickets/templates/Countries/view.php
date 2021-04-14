<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Country $country
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Country'), ['action' => 'edit', $country->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Country'), ['action' => 'delete', $country->id], ['confirm' => __('Are you sure you want to delete # {0}?', $country->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Countries'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Country'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="countries view content">
            <h3><?= h($country->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($country->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($country->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($country->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($country->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Cities') ?></h4>
                <?php if (!empty($country->cities)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Country Id') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($country->cities as $cities) : ?>
                        <tr>
                            <td><?= h($cities->id) ?></td>
                            <td><?= h($cities->name) ?></td>
                            <td><?= h($cities->country_id) ?></td>
                            <td><?= h($cities->created) ?></td>
                            <td><?= h($cities->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Cities', 'action' => 'view', $cities->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Cities', 'action' => 'edit', $cities->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Cities', 'action' => 'delete', $cities->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cities->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Events') ?></h4>
                <?php if (!empty($country->events)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Description') ?></th>
                            <th><?= __('Info') ?></th>
                            <th><?= __('Image Folder') ?></th>
                            <th><?= __('Lat') ?></th>
                            <th><?= __('Lng') ?></th>
                            <th><?= __('Location') ?></th>
                            <th><?= __('Is Hot') ?></th>
                            <th><?= __('Video') ?></th>
                            <th><?= __('City Id') ?></th>
                            <th><?= __('Country Id') ?></th>
                            <th><?= __('Category Id') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($country->events as $events) : ?>
                        <tr>
                            <td><?= h($events->id) ?></td>
                            <td><?= h($events->name) ?></td>
                            <td><?= h($events->description) ?></td>
                            <td><?= h($events->info) ?></td>
                            <td><?= h($events->image_folder) ?></td>
                            <td><?= h($events->lat) ?></td>
                            <td><?= h($events->lng) ?></td>
                            <td><?= h($events->location) ?></td>
                            <td><?= h($events->is_hot) ?></td>
                            <td><?= h($events->video) ?></td>
                            <td><?= h($events->city_id) ?></td>
                            <td><?= h($events->country_id) ?></td>
                            <td><?= h($events->category_id) ?></td>
                            <td><?= h($events->created) ?></td>
                            <td><?= h($events->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Events', 'action' => 'view', $events->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Events', 'action' => 'edit', $events->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Events', 'action' => 'delete', $events->id], ['confirm' => __('Are you sure you want to delete # {0}?', $events->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Users') ?></h4>
                <?php if (!empty($country->users)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('First Name') ?></th>
                            <th><?= __('Last Name') ?></th>
                            <th><?= __('Address') ?></th>
                            <th><?= __('Phone') ?></th>
                            <th><?= __('Email') ?></th>
                            <th><?= __('Password') ?></th>
                            <th><?= __('Gender') ?></th>
                            <th><?= __('Image') ?></th>
                            <th><?= __('Group Id') ?></th>
                            <th><?= __('Country Id') ?></th>
                            <th><?= __('City Id') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($country->users as $users) : ?>
                        <tr>
                            <td><?= h($users->id) ?></td>
                            <td><?= h($users->first_name) ?></td>
                            <td><?= h($users->last_name) ?></td>
                            <td><?= h($users->address) ?></td>
                            <td><?= h($users->phone) ?></td>
                            <td><?= h($users->email) ?></td>
                            <td><?= h($users->password) ?></td>
                            <td><?= h($users->gender) ?></td>
                            <td><?= h($users->image) ?></td>
                            <td><?= h($users->group_id) ?></td>
                            <td><?= h($users->country_id) ?></td>
                            <td><?= h($users->city_id) ?></td>
                            <td><?= h($users->created) ?></td>
                            <td><?= h($users->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Users', 'action' => 'view', $users->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Users', 'action' => 'edit', $users->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Users', 'action' => 'delete', $users->id], ['confirm' => __('Are you sure you want to delete # {0}?', $users->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
