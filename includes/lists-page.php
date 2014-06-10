<div class="wrap">
        
    
   <div id="icon-edit" class="icon32 icon32-posts-post"><br></div>
   <h2>
      <?php _e("My Lists","sola") ?>
       <a href="?page=sola-nl-menu&action=new_list" class="add-new-h2"><?php _e("Add List","sola") ?></a>
   </h2>
   <table class="wp-list-table widefat fixed">
      <thead>
         <tr>
            <th>List Name</th>
            <th>Description</th>
            <th>Total Subscribers</th>
         </tr>
      </thead>
      <tbody>
         <?php
            $lists = sola_nl_get_lists();
            foreach($lists as $list){?>
               <tr>
                  <td>
                     <strong>
                        <a href="?page=sola-nl-menu&action=new_list&list_id=<?php echo $list->list_id ?>">
                           <?php echo $list->list_name; ?>
                        </a>
                     </strong>
                     <div class="row-actions">
                        <span>
                           <a href="?page=sola-nl-menu&action=new_list&list_id=<?php echo $list->list_id ?>">
                              Edit
                           </a>
                        </span> | 
                        <span>
                           <a href="?page=sola-nl-menu-subscribers&list_id=<?php echo $list->list_id ?>">
                              View Subscribers
                           </a>
                        </span> | 
                        <span class="trash">
                           <a href="?page=sola-nl-menu-lists&action=delete_list&list_id=<?php echo $list->list_id ?>">
                              Delete
                           </a>
                        </span>
                     </div>
                  </td>
                  <td>
                     <?php echo $list->list_description; ?>
                  </td>
                  <td>
                     <?php $list_id = $list->list_id;
                        echo sola_nl_total_list_subscribers($list_id); 
                     ?>
                  </td>
               </tr>
               <?php
            }
         ?>
      </tbody>
   </table>
</div>
<?php include 'footer.php'; ?>