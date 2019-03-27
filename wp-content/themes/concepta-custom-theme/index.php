<?php
/**
 * Generic template create for purpose of this test
 */

 get_header();
 ?>

<main class="site-main d-grid">   
    
    <article class="ticket-main">
        <header class="ticket-main__header">
            <h2 class="ticket-main__header__title">Find tickets around the Country</h2>
            <p class="ticket-main__header__subtitle">Discover new experiences</p>
        </header>
        <form class="ticket-main__form">
            <div class="ticket-main__form__container">
                <div class="form-group">
                    <label for="where">WHERE</label>
                    <div class="form-group-input">
                        <input name="where" type="text" placeholder="MCO" disabled="true" />
                    </div>
                </div>
                <div class="form-group-flex">
                    <div class="form-group">
                        <label for="date-from">FROM</label>
                        <div class="form-group-input">
                            <input name="date-from" type="date" value="<?php echo date( 'Y-m-d' ); ?>" disabled="true" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="date-to">TO</label>
                        <div class="form-group-input">
                            <input name="date-to" type="date" placeholder="MCO" value="<?php echo date( 'Y-m-d' ); ?>" disabled="true" />
                        </div>
                    </div>
                </div>
                <div class="form-group-flex">
                    <div class="form-group">
                        <label for="adults">ADULTS</label>
                        <div class="form-group-input">
                            <input name="adults" type="number" placeholder="MCO" value="1" disabled="true" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="children">CHILDREN</label>
                        <div class="form-group-input">
                            <input name="children" type="number" placeholder="MCO" value="1" disabled="true" />
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <a class="ticket-main__form__submit" href="http://localhost/concepta-test/tickets">Search</a>
                </div>
            </div>
        </form>
    </article>

</main>

 <?php 
 get_footer();