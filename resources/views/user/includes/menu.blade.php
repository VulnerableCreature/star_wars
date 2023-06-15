<div class="row align-items-center text-center mb-3 mt-3">
    <div class="col mx-2">
        <a href="{{ Auth::user()->role->id === 1 ? route('admin.index') : route('main.index')  }}" class="btn btn-outline-dark">Главная</a>
    </div>
    <div class="col mx-2">
        <a href="{{ route('personal.liked.index') }}" class="btn btn-outline-dark">Понравившиеся посты <span class="badge text-bg-secondary">{{ $countPost }}</span></a>
    </div>
    <div class="col mx-2">
        <a href="{{ Auth::user()->role->id === 1 ? route('admin.index') : route('main.index')  }}" class="btn btn-outline-dark">Войти</a>
    </div>
</div>
