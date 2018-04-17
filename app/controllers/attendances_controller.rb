class AttendancesController < ApplicationController
  before_action :require_user, only: [:new]
  
  # GET /attendances/new
  def new
    @attendance = Attendance.new
    inicialize_variables()
  end


  # POST /attendances
  # POST /attendances.json
  def create
    @attendance = Attendance.new(attendance_params)

    respond_to do |format|
      if @attendance.save
        format.html { redirect_to animal_path(@attendance.animal), notice: 'Attendance was successfully created.' }
        format.json { render :index, status: :created, location: @attendance }
      else
        inicialize_variables()
        format.html { render :new }
        format.json { render json: @attendance.errors, status: :unprocessable_entity }
      end
    end
  end


  private
    # Never trust parameters from the scary internet, only allow the white list through.
    def attendance_params
      params.require(:attendance).permit(:dt, :animal_id, :vet_id, :obs)
    end
    
    def inicialize_variables
      @animals = Animal.all
      @vets = Vet.all
    end
end
