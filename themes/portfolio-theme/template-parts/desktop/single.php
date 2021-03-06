<style>
.content {
    overflow: auto !important;
}
</style>

<div class="page__content bg-post">
    <div class="sidenav text-center">
        <div class="nav-open-btn w-100 ui-btn ui-menu-open" for="menu-opener">
            <i class="material-icons menu-icon">
                menu
            </i>
        </div>
    </div>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <?php get_template_part("template-parts/desktop/title-nav"); ?>
                <div class="image-container">
                    <img src="<?php echo get_field('banner_pagina_interna_do_post')['url'] ?>" class="img-fluid" alt="">
                    <div class="txt-bottom-center scroll-label">
                        <span class="scroll-txt">
                            Scroll
                        </span>
                    </div>
                    <div class="txt-centered">
                        <?php 
                        $posttags = get_the_tags();
                            if ($posttags) {
                            foreach($posttags as $tag) {
                                ?>
                        <span class="post-tags">
                            <?php echo $tag->name; ?>
                        </span>
                        <?php
                            }
                        } ?>

                        <span class="titulo-interna">
                            <?php the_title(); ?>
                        </span>

                        <div class="inline info-projeto">
                            <span class="mr-4">
                                <?php 
                                 if( get_field('data') ):

                                    setlocale(LC_TIME, array('en_US.UTF-8','en_US@dollar','en_US','english'));
                                    $data = get_field("data");

                                    $dtime = DateTime::createFromFormat("d/m/Y", $data);
                                    $timestamp = $dtime->getTimestamp();

                                ?>
                                Date: <?php echo strftime('%B %d, %Y', $timestamp); ?>

                                <?php endif; ?>
                            </span>

                            <span class="mr-4">
                                Skills: <?php if( get_field('habilidades') ): the_field("habilidades"); endif; ?>
                            </span>

                            <span class="mr-4">
                                Client: <?php if( get_field('cliente') ): the_field("cliente"); endif; ?>
                            </span>

                            <span class="mr-4">
                                <?php if( get_field('link_do_projeto') ): ?>
                                Project URL: <a href="<?php the_field('link_do_projeto'); ?>"
                                    target="_blank"><?php the_field("link_do_projeto"); ?></a>
                                <?php endif; ?>
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <?php 
    
            if( have_rows('secao_1') ):
            
                while( have_rows('secao_1') ) : the_row();
                    
                    $titulo1 = get_sub_field('titulo');
                    $conteudo1 = get_sub_field('conteudo');

                    if( have_rows('imagens') ):
                        while( have_rows('imagens') ): the_row(); 
                            $images1[] = get_sub_field('arquivo');
                        endwhile;                 
                    endif;   

                endwhile;
            
            endif;            
            ?>

            <div class="container pt-5">
                <div class="row mt-5 mb-3">
                    <div class="col-4 section-title">
                        <?php if(isset($titulo1)) { echo $titulo1; } ?>
                    </div>
                    <div class="col-8">
                        <?php if(isset($conteudo1)) { echo $conteudo1; } ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card-deck">
                            <?php 

                            if(!empty($images1)) {

                            $i1 = 0;
                            foreach ($images1 as $img) {
                            ?>

                            <div class="card">
                                <a href="#" data-target="<?php echo "#img".$i1 ?>" data-toggle="modal" href="#">
                                    <img class="card-img-top img-fluid hover-shadow" src="<?php echo $img['url'] ?>">
                                </a>
                            </div>


                            <div aria-hidden="true" aria-labelledby="myModalLabel" class="modal fade"
                                id="<?php echo "img".$i1 ?>" role="dialog" tabindex="-1">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content mt-5">
                                        <div class="modal-body mb-0 p-0">
                                            <img src="<?php echo $img['url'] ?>" style="width:100%">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <?php

                                $i1++;
                                } 
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>

            <?php 
    
            if( have_rows('secao_2') ):
            
                while( have_rows('secao_2') ) : the_row();
                    
                    $titulo2 = get_sub_field('titulo');
                    $conteudo2 = get_sub_field('conteudo');

                    if( have_rows('imagens') ):
                        while( have_rows('imagens') ): the_row(); 
                            $images2[] = get_sub_field('arquivo');
                        endwhile;                 
                    endif;   

                endwhile;
            
            endif;            
            ?>

            <div class="container pt-5">
                <div class="row mt-5 mb-3">
                    <div class="col-4 section-title">
                        <?php if(isset($titulo2)) { echo $titulo2; } ?>
                    </div>
                    <div class="col-8">
                        <?php if(isset($conteudo2)) { echo $conteudo2; } ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card-deck">
                            <?php 

                            if(!empty($images2)) {

                            $i2 = 0;
                            foreach ($images2 as $img) {
                            ?>

                            <div class="card">
                                <a href="#" data-target="<?php echo "#img".$i2 ?>" data-toggle="modal" href="#">
                                    <img class="card-img-top img-fluid hover-shadow" src="<?php echo $img['url'] ?>">
                                </a>
                            </div>


                            <div aria-hidden="true" aria-labelledby="myModalLabel" class="modal fade"
                                id="<?php echo "img".$i2 ?>" role="dialog" tabindex="-1">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content mt-5">
                                        <div class="modal-body mb-0 p-0">
                                            <img src="<?php echo $img['url'] ?>" style="width:100%">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <?php

                                $i2++;
                                } 
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>

            <?php 

            $passos = array();
    
            if( have_rows('secao_3') ):
            
                while( have_rows('secao_3') ) : the_row();
                    
                    $titulo3 = get_sub_field('titulo');
                    $conteudo3 = get_sub_field('conteudo');

                    if( have_rows('imagens') ):
                        while( have_rows('imagens') ): the_row(); 
                            $images3[] = get_sub_field('arquivo');
                        endwhile;                 
                    endif; 
                    
                    if( have_rows('passos_do_projeto') ):
                        while( have_rows('passos_do_projeto') ): the_row(); 
                            array_push(
                                $passos,
                                array(
                                    "titulo" => get_sub_field('titulo'),
                                    "descricao" => get_sub_field('descricao')
                                )
                            );
                        endwhile;                 
                    endif;
                endwhile;            
            endif;            
            ?>

            <div class="container pt-5">
                <div class="row mt-5">
                    <div class="col-4 section-title">
                        <?php if(isset($titulo3)) { echo $titulo3; } ?>
                    </div>
                    <div class="col-8">
                        <?php if(isset($conteudo3)) { echo $conteudo3; } ?>
                    </div>
                </div>
                <div class="row mb-5">
                    <?php

                    if(!empty($passos)) {
                        $p_count = 1;
                        foreach($passos as $passo) {
                        ?>
                    <div class="col-4 h-250 mt-4">
                        <div class="passo-num">
                            <?php echo "0" .$p_count. "." ?>
                        </div>
                        <div class="bg-grey"></div>
                        <div class="passo-titulo">
                            <?php echo $passo["titulo"]; ?>
                        </div>
                        <div class="passo-desc">
                            <?php echo $passo["descricao"]; ?>
                        </div>
                    </div>
                    <?php
                            $p_count++;
                        }
                    }
                    ?>
                </div>
                <div class="row pt-5">
                    <div class="col-12">
                        <div class="card-deck">
                            <?php 
                            if(!empty($images3)) {
                            $i3 = 0;
                            foreach ($images3 as $img) {
                            ?>

                            <div class="card">
                                <a href="#" data-target="<?php echo "#img".$i3 ?>" data-toggle="modal" href="#">
                                    <img class="card-img-top img-fluid hover-shadow" src="<?php echo $img['url'] ?>">
                                </a>
                            </div>


                            <div aria-hidden="true" aria-labelledby="myModalLabel" class="modal fade"
                                id="<?php echo "img".$i3 ?>" role="dialog" tabindex="-1">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content mt-5">
                                        <div class="modal-body mb-0 p-0">
                                            <img src="<?php echo $img['url'] ?>" style="width:100%">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <?php

                                $i3++;
                                } 
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="mt-5">
            <?php get_template_part("template-parts/desktop/footer-post"); ?>
        </div>
    </div>
</div>
</div>