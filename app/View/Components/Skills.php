<?php

namespace App\View\Components;

use App\Skill;
use Illuminate\View\Component;

class Skills extends Component
{
    public $mainSkills;
    public $sideSkills;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->mainSkills = Skill::where('type', 'main')->get()
            ->transform(function ($skill) {
                $this->addRankStyles($skill);
                return $skill;
            });

        $allSideSkills = Skill::where('type', 'side')->get()
            ->transform(function ($skill) {
                $this->addRankStyles($skill);
                return $skill;
            });
        $this->sideSkills = $allSideSkills->splice(0, 12);
        $this->sideSkillsHidden = $allSideSkills;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.skills', [
            'mainSkills' => $this->mainSkills,
            'sideSkills' => $this->sideSkills,
            'sideSkillsHidden' => $this->sideSkillsHidden
        ]);
    }

    private function addRankStyles($skill)
    {
        if ($skill->rank <= 100) {
            $skill['rank_style'] = 'text-yellow-500 font-normal';
        } elseif ($skill->rank >= 200) {
            $skill['rank_style'] = 'text-blue-400 font-semibold';
        } else {
            $skill['rank_style'] = 'text-green-400 font-medium';
        }
    }
}
