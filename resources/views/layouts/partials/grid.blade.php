
<script type="text/x-template" id="grid-template">
    <table>
        <thead>
        <tr>
            <th v-for="key in columns"
            @click="sortBy(key)"
            :class="{active: sortKey == key}">
            @{{key | capitalize}}
            <span class="arrow"
                  :class="sortOrders[key] > 0 ? 'asc' : 'dsc'">
          </span>
            </th>
        </tr>
        </thead>
        <tbody>
        <tr v-for="
        entry in data
        | filterBy filterKey
        | orderBy sortKey sortOrders[sortKey]">
            <td v-for="key in columns">
                @{{entry[key]}}
            </td>
        </tr>
        </tbody>
    </table>
</script>

<!-- demo root element -->
<div id="test1">
    <form id="search">
        Search <input name="query" v-model="searchQuery">
    </form>
    <demo-grid
            :data="{{$data_grid}}"
            :columns="{{$columns}}"
            :filter-key="searchQuery">
    </demo-grid>
</div>
