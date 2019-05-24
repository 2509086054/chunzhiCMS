{if(!defined("RUN_MODE"))} {!die()} {/if}
    <div class="search-field">
      <div class="container">
        <form action='{!helper::createLink('search')}' method='get' role='search'>
          <input type="text" name="words" id="words" value="" placeholder="输入并按回车键...">
          <button type="submit" class="hidden btn btn-default">Submit</button>
        </form>
      </div>
    </div><!-- search-field -->
