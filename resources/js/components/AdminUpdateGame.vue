<template>
    <form
        :id="'update-id-' + game.id"
        :action="'update' + game.id"
        method="POST"
    >
        <input type="hidden" name="_token" :value="csrf" />
        <input name="id" type="hidden" :value="game.id" />
        <hr />
        <div class="input-group md-form form-sm form-2 pl-0">
            <div class="d-block col-12 col-md-8">
                <label class="font-weight-bold blue mt-2" for="reference">{{
                    name
                }}</label>
                <input
                    name="reference"
                    class="form-control my-0 py-1 amber-border"
                    type="text"
                    :value="game.reference"
                />
            </div>
            <div class="d-block col-12 col-md-3">
                <label class="font-weight-bold blue mt-2" for="dateRelease">{{
                    release
                }}</label>
                <input
                    name="dateRelease"
                    class="form-control my-0 py-1 amber-border"
                    type="text"
                    :value="game.dateRelease"
                />
            </div>
            <div class="d-block col-12 col-md-1">
                <label class="font-weight-bold blue mt-2" for="stock">{{
                    stock
                }}</label>
                <input
                    name="stock"
                    class="form-control my-0 py-1 amber-border"
                    type="text"
                    :value="game.stock"
                />
            </div>
        </div>
        <div class="input-group md-form form-sm form-2 pl-0 mt-2">
            <div class="btn-group col-12 col-md-3">
                <button
                    type="button"
                    class="btn btn-default text-light bg-orange dropdown-toggle font-weight-bold mt-2"
                    data-toggle="dropdown"
                >
                    {{ genre }}<span class="caret"></span>
                </button>
                <ul class="dropdown-menu scrollable-menu" role="menu">
                    <li v-for="genre in genres" :key="genre.id">
                        <input
                            type="checkbox"
                            :name="'genre[' + genre.id + ']'"
                        />
                        <label :for="'genre[' + genre.id + ']'">{{
                            genre.name
                        }}</label>
                    </li>
                </ul>
            </div>

            <div class="btn-group col-12 col-md-3">
                <button
                    type="button"
                    class="btn btn-default text-light bg-orange dropdown-toggle font-weight-bold mt-2"
                    data-toggle="dropdown"
                >
                    {{ platform }}<span class="caret"></span>
                </button>
                <ul class="dropdown-menu scrollable-menu" role="menu">
                    <li v-for="platform in platforms" :key="platform.id">
                        <input
                            type="checkbox"
                            :name="'platform[' + platform.id + ']'"
                        />
                        <label :for="'platform[' + platform.id + ']'">{{
                            platform.name
                        }}</label>
                    </li>
                </ul>
            </div>

            <div class="btn-group col-12 col-md-3">
                <button
                    type="button"
                    class="btn btn-default text-light bg-orange dropdown-toggle font-weight-bold mt-2"
                    data-toggle="dropdown"
                >
                    {{ mode }}<span class="caret"></span>
                </button>
                <ul class="dropdown-menu scrollable-menu" role="menu">
                    <li v-for="mode in modes" :key="mode.id">
                        <input
                            type="checkbox"
                            :name="'mode[' + mode.id + ']'"
                        />
                        <label :for="'mode[' + mode.id + ']'">{{
                            mode.name
                        }}</label>
                    </li>
                </ul>
            </div>

            <div class="btn-group col-12 col-md-3">
                <button
                    type="button"
                    class="btn btn-default text-light bg-orange dropdown-toggle font-weight-bold mt-2"
                    data-toggle="dropdown"
                >
                    {{ developer }}<span class="caret"></span>
                </button>
                <ul class="dropdown-menu scrollable-menu" role="menu">
                    <li v-for="developer in developers" :key="developer.id">
                        <input
                            type="checkbox"
                            :name="'developer[' + developer.id + ']'"
                        />
                        <label :for="'developer[' + developer.id + ']'">{{
                            developer.name
                        }}</label>
                    </li>
                </ul>
            </div>
        </div>

        <div class="input-group md-form form-sm form-2 pl-0">
            <div class="d-block col-12">
                <label class="font-weight-bold blue mt-2" for="synopsis">{{
                    synopsis
                }}</label>
                <textarea
                    name="synopsis"
                    class="form-control my-0 py-1 amber-border"
                    cols="20"
                    rows="5"
                    :value="game.synopsis"
                ></textarea>
            </div>

            <button
                type="submit"
                class="btn bg-orange text-light mx-auto font-weight-bold mt-4 shadow-sm"
            >
                {{ update }}
            </button>
        </div>

        <hr />
    </form>
</template>
<script>
export default {
    props: [
        "game",
        "genres",
        "genre",
        "release",
        "email",
        "name",
        "stock",
        "synopsis",
        "modes",
        "mode",
        "platforms",
        "platform",
        "developers",
        "developer",
        "update"
    ],
    data: function() {
        return {
            csrf: document.head.querySelector('meta[name="csrf-token"]').content
        };
    }
};
</script>
