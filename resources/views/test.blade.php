<!DOCTYPE html>
<html>
<head>
    <title>My Title</title>

    <style>
        body {
            font-family: Helvetica Neue, Arial, sans-serif;
            font-size: 14px;
            color: #444;
        }

        table {
            border: 2px solid #42b983;
            border-radius: 3px;
            background-color: #fff;
        }

        th {
            background-color: #42b983;
            color: rgba(255,255,255,0.66);
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            -user-select: none;
        }

        td {
            background-color: #f9f9f9;
        }

        th, td {
            min-width: 120px;
            padding: 10px 20px;
        }

        th.active {
            color: #fff;
        }

        th.active .arrow {
            opacity: 1;
        }

        .arrow {
            display: inline-block;
            vertical-align: middle;
            width: 0;
            height: 0;
            margin-left: 5px;
            opacity: 0.66;
        }

        .arrow.asc {
            border-left: 4px solid transparent;
            border-right: 4px solid transparent;
            border-bottom: 4px solid #fff;
        }

        .arrow.dsc {
            border-left: 4px solid transparent;
            border-right: 4px solid transparent;
            border-top: 4px solid #fff;
        }

        #search {
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
<!-- component template -->
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
            :data="{{$name}}"
            :columns="gridColumns"
            :filter-key="searchQuery">
    </demo-grid>
</div>
<script src="{{'js/main.js'}}"></script>
</body>
</html>