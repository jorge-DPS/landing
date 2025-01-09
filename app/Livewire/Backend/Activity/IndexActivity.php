<?php

namespace App\Livewire\Backend\Activity;

use App\Models\Backend\Pages\Activity;
use Livewire\Attributes\On;
use Livewire\Component;

class IndexActivity extends Component
{
    public $search = '';
    public $yearFilter = '';

    protected $listeners = ['deleteActivity'];

    #[On('delete-activity')]
    public function deleteActivity(Activity $activity){
        // dd($activity);
        $activity->delete();
    }

    public function render()
    {
        $activities = Activity::query()
            ->when($this->search, function ($query) {
                $query->where('name', 'like', '%' . $this->search . '%');
            })
            ->when($this->yearFilter, function ($query) {
                $query->whereYear('start_date', $this->yearFilter);
            })
            ->get();

        return view('livewire.backend.activity.index-activity', [
            'activities' => $activities,
        ]);
    }
}
