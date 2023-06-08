<div class="row mb-5 align-items-center text-center alert alert-light d-flex justify-content-between">
    <div class="card alert alert-warning" style="max-width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">Пользователи</h5>
            <p class="card-text">Количество: {{ $data['userCount'] }}</p>
        </div>
    </div>
    <div class="card alert alert-success" style="max-width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">Посты</h5>
            <p class="card-text">Количество: {{ $data['postCount'] }}</p>
        </div>
    </div>
    <div class="card alert alert-secondary" style="max-width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">Категории</h5>
            <p class="card-text">Количество: {{ $data['categoryCount'] }}</p>
        </div>
    </div>
    <div class="card alert alert-info" style="max-width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">Тэги</h5>
            <p class="card-text">Количество: {{ $data['tagCount'] }}</p>
        </div>
    </div>
</div>
