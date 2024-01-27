<?php

namespace App\Api\Generated\Build\Objects;

readonly class GroupsLongPollEvents
{
    /**
     * @param mixed $audio_new
     * @param mixed $board_post_delete
     * @param mixed $board_post_edit
     * @param mixed $board_post_new
     * @param mixed $board_post_restore
     * @param mixed $group_change_photo
     * @param mixed $group_change_settings
     * @param mixed $group_join
     * @param mixed $group_leave
     * @param mixed $group_officers_edit
     * @param mixed $market_comment_delete
     * @param mixed $market_comment_edit
     * @param mixed $market_comment_new
     * @param mixed $market_comment_restore
     * @param mixed $message_allow
     * @param mixed $message_deny
     * @param mixed $message_new
     * @param mixed $message_read
     * @param mixed $message_reply
     * @param mixed $message_typing_state
     * @param mixed $message_edit
     * @param mixed $photo_comment_delete
     * @param mixed $photo_comment_edit
     * @param mixed $photo_comment_new
     * @param mixed $photo_comment_restore
     * @param mixed $photo_new
     * @param mixed $poll_vote_new
     * @param mixed $user_block
     * @param mixed $user_unblock
     * @param mixed $video_comment_delete
     * @param mixed $video_comment_edit
     * @param mixed $video_comment_new
     * @param mixed $video_comment_restore
     * @param mixed $video_new
     * @param mixed $message_reaction_event
     * @param mixed $wall_post_new
     * @param mixed $wall_reply_delete
     * @param mixed $wall_reply_edit
     * @param mixed $wall_reply_new
     * @param mixed $wall_reply_restore
     * @param mixed $wall_repost
     * @param mixed $donut_subscription_create
     * @param mixed $donut_subscription_prolonged
     * @param mixed $donut_subscription_cancelled
     * @param mixed $donut_subscription_expired
     * @param mixed $donut_subscription_price_changed
     * @param mixed $donut_money_withdraw
     * @param mixed $donut_money_withdraw_error
     * @param mixed $lead_forms_new
     * @param mixed $market_order_new
     * @param mixed $market_order_edit
     */
    public function __construct(
        public mixed $audio_new,
        public mixed $board_post_delete,
        public mixed $board_post_edit,
        public mixed $board_post_new,
        public mixed $board_post_restore,
        public mixed $group_change_photo,
        public mixed $group_change_settings,
        public mixed $group_join,
        public mixed $group_leave,
        public mixed $group_officers_edit,
        public mixed $market_comment_delete,
        public mixed $market_comment_edit,
        public mixed $market_comment_new,
        public mixed $market_comment_restore,
        public mixed $message_allow,
        public mixed $message_deny,
        public mixed $message_new,
        public mixed $message_read,
        public mixed $message_reply,
        public mixed $message_typing_state,
        public mixed $message_edit,
        public mixed $photo_comment_delete,
        public mixed $photo_comment_edit,
        public mixed $photo_comment_new,
        public mixed $photo_comment_restore,
        public mixed $photo_new,
        public mixed $poll_vote_new,
        public mixed $user_block,
        public mixed $user_unblock,
        public mixed $video_comment_delete,
        public mixed $video_comment_edit,
        public mixed $video_comment_new,
        public mixed $video_comment_restore,
        public mixed $video_new,
        public mixed $message_reaction_event,
        public mixed $wall_post_new,
        public mixed $wall_reply_delete,
        public mixed $wall_reply_edit,
        public mixed $wall_reply_new,
        public mixed $wall_reply_restore,
        public mixed $wall_repost,
        public mixed $donut_subscription_create,
        public mixed $donut_subscription_prolonged,
        public mixed $donut_subscription_cancelled,
        public mixed $donut_subscription_expired,
        public mixed $donut_subscription_price_changed,
        public mixed $donut_money_withdraw,
        public mixed $donut_money_withdraw_error,
        public mixed $lead_forms_new = NULL,
        public mixed $market_order_new = NULL,
        public mixed $market_order_edit = NULL
    ) {}
}