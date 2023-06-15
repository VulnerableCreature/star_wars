<div class="row align-items-center text-center alert alert-light border border-dark mb-3 mt-3">
    <div class="col mx-2">
        <a href="{{ route('admin.index') }}" class="btn btn-outline-dark">Главная</a>
    </div>
    <div class="col mx-2">
        <a href="{{ route('admin.user.index') }}" class="btn btn-outline-dark">Пользователи</a>
    </div>
    <div class="col mx-2">
        <a href="{{ route('admin.post.index') }}" class="btn btn-outline-dark">Посты</a>
    </div>
    <div class="col mx-2">
        <a href="{{ route('admin.category.index') }}" class="btn btn-outline-dark">Категории</a>
    </div>
    <div class="col">
        <a href="{{ route('admin.tag.index') }}" class="btn btn-outline-dark">Тэги</a>
    </div>
    <div class="col">
        <a href="{{ route('admin.role.index') }}" class="btn btn-outline-dark">Роли</a>
    </div>
    <div class="col">
        <a href="{{ route('personal.index') }}" class="btn btn-outline-dark">Профиль</a>
    </div>
    <div class="col">
        <div class="btn-group">
            <button type="button" class="btn btn-outline-dark dropdown-toggle" data-bs-toggle="dropdown"
                    aria-expanded="false">
                Мусорка
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{ route('admin.post.trash.index') }}">Посты</a></li>
                <li><a class="dropdown-item" href="{{ route('admin.category.trash.index') }}">Категории</a></li>
                <li><a class="dropdown-item" href="{{ route('admin.tag.trash.index') }}">Тэги</a></li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="{{ route('admin.role.trash.index') }}">Роли</a></li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="{{ route('admin.user.trash.index') }}">Пользователи</a></li>
            </ul>
        </div>
    </div>
    <div class="col">
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <input class="btn btn-outline-danger" type="submit" value="Выйти">
        </form>
    </div>
</div>
