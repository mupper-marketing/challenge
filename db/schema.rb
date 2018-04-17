# encoding: UTF-8
# This file is auto-generated from the current state of the database. Instead
# of editing this file, please use the migrations feature of Active Record to
# incrementally modify your database, and then regenerate this schema definition.
#
# Note that this schema.rb definition is the authoritative source for your
# database schema. If you need to create the application database on another
# system, you should be using db:schema:load, not running all the migrations
# from scratch. The latter is a flawed and unsustainable approach (the more migrations
# you'll amass, the slower it'll run and the greater likelihood for issues).
#
# It's strongly recommended that you check this file into your version control system.

ActiveRecord::Schema.define(version: 20180412172942) do

  create_table "admins", force: :cascade do |t|
    t.text     "name"
    t.text     "email"
    t.datetime "created_at", null: false
    t.datetime "updated_at", null: false
  end

  create_table "animals", force: :cascade do |t|
    t.text     "name"
    t.integer  "age"
    t.text     "specie"
    t.text     "breed"
    t.text     "obs"
    t.datetime "created_at", null: false
    t.datetime "updated_at", null: false
    t.string   "avatar"
  end

  create_table "attendances", force: :cascade do |t|
    t.date     "dt"
    t.integer  "animal_id"
    t.integer  "vet_id"
    t.text     "obs"
    t.datetime "created_at", null: false
    t.datetime "updated_at", null: false
  end

  add_index "attendances", ["animal_id"], name: "index_attendances_on_animal_id"
  add_index "attendances", ["vet_id"], name: "index_attendances_on_vet_id"

  create_table "donations", force: :cascade do |t|
    t.text     "donor"
    t.text     "donation_type"
    t.integer  "quantity"
    t.datetime "created_at",    null: false
    t.datetime "updated_at",    null: false
    t.integer  "animal_id"
  end

  add_index "donations", ["animal_id"], name: "index_donations_on_animal_id"

  create_table "users", force: :cascade do |t|
    t.string   "first_name"
    t.string   "last_name"
    t.string   "email"
    t.string   "password_digest"
    t.datetime "created_at",      null: false
    t.datetime "updated_at",      null: false
  end

  create_table "vets", force: :cascade do |t|
    t.text     "name"
    t.text     "phone"
    t.text     "crv"
    t.text     "address"
    t.datetime "created_at", null: false
    t.datetime "updated_at", null: false
  end

end
