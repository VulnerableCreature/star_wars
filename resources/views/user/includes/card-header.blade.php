<div class="card-header">
    <div class="d-flex flex-column">
        <div class="d-flex flex-row justify-content-between align-items-center">
            @if(Auth::user()->secondname  == '' && Auth::user()->lastname == '' )
                <p>Вам необходимо обновить свои данные</p>
            @else
                {{ Auth::user()->lastname }} {{ Auth::user()->firstname }}
            @endif
            <div class="p-2"><a href="{{ route('personal.edit', Auth::user()->id) }}" class="btn btn-outline-primary">Редактировать</a></div>
        </div>
        <div @class([
               'badge text-bg-danger' => Auth::user()->role->id === 1,
               'badge text-bg-primary' =>Auth::user()->role->id === 4,
               'badge text-bg-info' => Auth::user()->role->id === 3,
               ]) style="width: 100px;">{{ Auth::user()->role->title }}
        </div>
    </div>
</div>
