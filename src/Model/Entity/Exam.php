<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Exam Entity
 *
 * @property int $id
 * @property string $name
 * @property string $tahun_ajaran
 * @property \Cake\I18n\FrozenTime $schedule_start
 * @property \Cake\I18n\FrozenTime $schedule_end
 * @property int $kkm
 * @property int $duration
 * @property int $status
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property int|null $course_id
 *
 * @property \App\Model\Entity\Course $course
 * @property \App\Model\Entity\Result[] $results
 * @property \App\Model\Entity\Level[] $levels
 */
class Exam extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'name' => true,
        'tahun_ajaran' => true,
        'schedule_start' => true,
        'schedule_end' => true,
        'kkm' => true,
        'duration' => true,
        'status' => true,
        'created' => true,
        'modified' => true,
        'course_id' => true,
        'course' => true,
        'results' => true,
        'levels' => true
    ];
}
