<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Question Entity
 *
 * @property int $id
 * @property string $question
 * @property string|null $option_1
 * @property string|null $option_2
 * @property string|null $option_3
 * @property string|null $option_4
 * @property string|null $option_5
 * @property int|null $question_media
 * @property int|null $option1_media
 * @property int|null $option2_media
 * @property int|null $option3_media
 * @property int|null $option4_media
 * @property int|null $option5_media
 * @property int|null $correct_answer
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property int|null $course_id
 *
 * @property \App\Model\Entity\Course $course
 * @property \App\Model\Entity\Answer[] $answers
 */
class Question extends Entity
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
        'question' => true,
        'option_1' => true,
        'option_2' => true,
        'option_3' => true,
        'option_4' => true,
        'option_5' => true,
        'question_media' => true,
        'option1_media' => true,
        'option2_media' => true,
        'option3_media' => true,
        'option4_media' => true,
        'option5_media' => true,
        'correct_answer' => true,
        'created' => true,
        'modified' => true,
        'course_id' => true,
        'course' => true,
        'answers' => true
    ];
}
