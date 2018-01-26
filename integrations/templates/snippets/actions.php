<div class="Selectable-actions clearfix">
    <div class="float-left">
        <button type="button" class="btn btn-inverse btn-sm" data-check-cancel="cruditems">
            <i class="material-icons">close</i>
            <span class="hidden-sm-down">Sélection</span>
            <span class="badge badge-default" data-check-count="cruditems">0</span>
        </button>
    </div>
    <div class="float-right">
        <button type="submit"
            formaction="#unlock"
            class="btn btn-success btn-sm"
            data-check-data="cruditems"
            data-confirm="Déverrouiller la sélection ?">
            <i class="material-icons">lock_open</i>
            <span class="hidden-sm-down">Déverrouiller</span>
        </button>
        <button type="submit"
            formaction="#lock"
            class="btn btn-warning btn-sm"
            data-check-data="cruditems"
            data-confirm="Verrouiller la sélection ?">
            <i class="material-icons">lock</i>
            <span class="hidden-sm-down">Verrouiller</span>
        </button>
        <button type="submit"
            formaction="#delete"
            class="btn btn-danger btn-sm" 
            data-check-data="cruditems"
            data-confirm="Supprimer la sélection ?">
            <i class="material-icons">delete</i>
            <span class="hidden-sm-down">Supprimer</span>
        </button>
    </div>
</div>