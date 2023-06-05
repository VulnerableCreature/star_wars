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
        <div class="btn-group">
            <button type="button" class="btn btn-outline-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                Мусорка
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Посты</a></li>
                <li><a class="dropdown-item" href="#">Категории</a></li>
                <li><a class="dropdown-item" href="#">Тэги</a></li>
                <li><a class="dropdown-item" href="#">Роли</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Пользователи</a></li>
            </ul>
        </div>
    </div>
</div>
